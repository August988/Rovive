ClientToolbox = new Object();

ClientToolbox.IsUserAuthenticated = false;
ClientToolbox.IsDecalCreationEnabled = false;
ClientToolbox.NumberOfItemsPerPage = 26;
ClientToolbox.TotalNumberOfItemsInCurrentSet = 0;
ClientToolbox.CurrentPage = 0;
ClientToolbox.CurrentSetId;
ClientToolbox.SearchString;
ClientToolbox.MySetsHasData = true;
ClientToolbox.ClientToolboxIE9DragEnabled = false;

ClientToolbox.OnPageLoad = function () {
    $("#RobloxSets").addClass("Selected");
    ClientToolbox.FetchData("RobloxSets");
}

ClientToolbox.ChangeTab = function (tabname) {
    if ($("#" + tabname).hasClass("Selected"))
        return;
    $(".Tabs").removeClass("Selected");
    $("#" + tabname).addClass("Selected");

    $("#ddlSets").empty();
    $("#ToolboxItems").html("");
    $("#Navigation").hide();

    //fetch the information
    ClientToolbox.FetchData(tabname);
}

ClientToolbox.FetchData = function (category) {
    $("#ToolboxSearch").hide();

    if (category == "MySets" && ClientToolbox.IsUserAuthenticated) {
        ClientToolbox.CallHandler("getsets");
        ClientToolbox.CallHandler("getsubscribedsets");
    }
    else if (category == "RobloxSets") {
        ClientToolbox.CallHandler("getrobloxsets");
    }
    else if (category == "OtherSets") {
        var data = [];
        $("#ToolboxSearch").show();
        if (ClientToolbox.IsUserAuthenticated) {
            data.push({ ID: 'MyModels', Name: 'My Models' });
            if (ClientToolbox.IsDecalCreationEnabled)
                data.push({ ID: 'MyDecals', Name: 'My Decals' });
        }
        data.push({ ID: 'FreeModels', Name: 'Free Models' }, { ID: 'FreeDecals', Name: 'Free Decals' });

        ClientToolbox.PopulateDropDownList(data, true);
        ClientToolbox.PopulateAssets(data[0].ID);
    }
}

ClientToolbox.Search = function () {
    var searchString = $("#tbSearch").val();
    if (ClientToolbox.SearchString != searchString) {
        ClientToolbox.SearchString = searchString;
        ClientToolbox.ResetPagingForNewSearch();
        ClientToolbox.PopulateAssets(ClientToolbox.CurrentSetId);
    }
}
ClientToolbox.PopulateDropDownList = function (items, resetList) {
    var listItems = "";
    $("#ddlSets").removeAttr('disabled');
    for (var i = 0; i < items.length; i++) {
        listItems += "<option value='" + items[i].ID + "'>" + items[i].Name + "</option>";
    }
    if (resetList) {
        $("#ddlSets").empty();
        $("#ddlSets").html(listItems);
    } else {
        $(listItems).appendTo("#ddlSets");
    }
}

ClientToolbox.DropDownListChanged = function () {
    if ($("#tbSearch").is(":visible")) {
        $("#tbSearch").val("");
        ClientToolbox.SearchString = "";
    }
    ClientToolbox.PopulateAssets($("#ddlSets option:selected").attr("value"));
}

ClientToolbox.CallHandler = function (requestType) {
    //TODO - change the maxsets # to a config
    $.ajax({
        url: "/Sets/SetHandler.ashx",
        data: { maxsets: 10, rqtype: requestType },
        type: "GET",
        dataType: "json",
        success: function (data) {
            if (data.length < 1) {
                if (requestType == "getsets")
                    ClientToolbox.MySetsHasData = false;
                if (requestType == "getsubscribedsets" && !ClientToolbox.MySetsHasData) {
                    $('#ToolboxItems').html("No sets are available");
                    $('#ddlSets').attr('disabled', true);
                }
            }
            else {
                var resetList = true;
                if (requestType == "getsets" || requestType == "getsubscribedsets") {
                    resetList = false;
                    if (requestType == "getsets") {
                        $("#ddlSets").empty();
                        ClientToolbox.MySetsHasData = true;
                        ClientToolbox.PopulateAssets(data[0].ID);
                    }
                    ClientToolbox.PopulateDropDownList(data, resetList);
                    if (!ClientToolbox.MySetsHasData)
                        ClientToolbox.PopulateAssets(data[0].ID);
                } else {
                    ClientToolbox.PopulateDropDownList(data, resetList);
                    ClientToolbox.PopulateAssets(data[0].ID);
                }
            }
        },
        error: function (a, b, c) {
            $('#ToolboxItems').html("An error occured while retrieving sets");
        }
    });
}

ClientToolbox.GetSetInfo = function (id) {
    if (id == "getmydecals" || id == "getmymodels" || id == "getfreedecals" || id == "getfreemodels") {
        if (id == "getmydecals" && ClientToolbox.IsUserAuthenticated)
            id = 6; //SETTYPE_MyDecals
        else if (id == "getmymodels" && ClientToolbox.IsUserAuthenticated)
            id = 7; //SETTYPE_MyModels
        else if (id == "getfreedecals")
            id = 4; //SETTYPE_FreeDecals
        else if (id == "getfreemodels")
            id = 5; //SETTYPE_FreeModels

        $.getJSON(
            "/Sets/SetHandler.ashx?rqtype=getothersetinfo&settype=" + id + "&query=" + (typeof(ClientToolbox.SearchString) === "undefined" ? "" : ClientToolbox.SearchString) ,
            function (object) {
                // Get our JSON response object
                if (object.Error && object.Error.substr(0, 6) == "ERROR_") {
                    //Did not get any paging information
                } else {
                    ClientToolbox.TotalNumberOfItemsInCurrentSet = object[0].TotalNumAssetsInSet;
                    ClientToolbox.UpdatePaging();
                }
            });
    } else {
        $.getJSON(
        "/Sets/SetHandler.ashx?rqtype=getsetinfo&setid=" + id,
        function (object) {
            // Get our JSON response object
            if (object.Error && object.Error.substr(0, 6) == "ERROR_") {
                //Did not get any paging information
            } else {
                ClientToolbox.TotalNumberOfItemsInCurrentSet = object[2].TotalNumAssetsInSet;
                ClientToolbox.UpdatePaging();
            }
        });
    }
}

ClientToolbox.UpdatePaging = function () {
    if (ClientToolbox.TotalNumberOfItemsInCurrentSet > ClientToolbox.NumberOfItemsPerPage) {
        $("#Navigation").show();

        var numOfPages = Math.ceil(ClientToolbox.TotalNumberOfItemsInCurrentSet / ClientToolbox.NumberOfItemsPerPage);
        $("#Location").text(ClientToolbox.CurrentPage + 1 + " of " + numOfPages + " pages");

        if (ClientToolbox.CurrentPage > 0) {
            $("#Previous").show();
        } else {
            $("#Previous").hide();
        }

        if ((ClientToolbox.CurrentPage + 1) * ClientToolbox.NumberOfItemsPerPage < ClientToolbox.TotalNumberOfItemsInCurrentSet) {
            $("#Next").show();
        } else {
            $("#Next").hide();
        }
    } else {
        $("#Navigation").hide();
    }
}

ClientToolbox.Paging = function (direction) {

    var atLastPage = ((ClientToolbox.CurrentPage + 1) * ClientToolbox.NumberOfItemsPerPage < ClientToolbox.TotalNumberOfItemsInCurrentSet);
    var atFirstPage = (ClientToolbox.CurrentPage > 0);

    if (direction == 'previous' && atFirstPage) {
        ClientToolbox.CurrentPage--;
    } else if (direction == 'next' && atLastPage) {
        ClientToolbox.CurrentPage++;
    } else {
        return false;
    }
    ClientToolbox.UpdatePaging();
    $("#ToolboxItems").html("");
    
    window.setTimeout(function () {
        if ($('#ToolboxItems').is(':empty')) {
            $('#ToolboxItems').append("<div style='text-align: center;margin-top: 25px;'><img src='/img/spinners/spinner100x100.gif' alt='Loading...' /></div>");
        }
    }, 500);
    ClientToolbox.PopulateAssets(ClientToolbox.CurrentSetId);
}

ClientToolbox.ResetPagingForNewSearch = function() {
    ClientToolbox.CurrentPage = 0;
    ClientToolbox.TotalNumberOfItemsInCurrentSet = 0;
    ClientToolbox.GetSetInfo(ClientToolbox.CurrentSetId);
}

ClientToolbox.PopulateAssets = function (id) {
    if (id == "MyDecals" && ClientToolbox.IsUserAuthenticated)
        id = "getmydecals";
    else if (id == "MyModels" && ClientToolbox.IsUserAuthenticated)
        id = "getmymodels";
    else if (id == "FreeDecals")
        id = "getfreedecals";
    else if (id == "FreeModels")
        id = "getfreemodels";

    if (ClientToolbox.CurrentSetId != id) {
        ClientToolbox.CurrentSetId = id;
        ClientToolbox.ResetPagingForNewSearch();
    }

    var queryParams = { startRowIndex: ClientToolbox.CurrentPage * ClientToolbox.NumberOfItemsPerPage, maximumRows: ClientToolbox.NumberOfItemsPerPage };
    if (isNaN(id)) {
        queryParams.rqtype = id;
        queryParams.query = (typeof (ClientToolbox.SearchString) === "undefined" ? "" : ClientToolbox.SearchString);
    }
    else {
        queryParams.rqtype = 'getsetitems';
        queryParams.setID = id;
    }

    $.ajax({
        url: "/Sets/SetHandler.ashx",
        type: "GET",
        data: queryParams,
        dataType: "json",
        success: function (data) {
            if (data.length == 0) {
                $('#ToolboxItems').html("This set contains no items");
            }
            else if (data.length > 0 && data[0].error) {
                //Show error message
            } else {
                var imagesHtml = "";
                if (id == "getmydecals" || id == "getmymodels" || id == "getfreedecals" || id == "getfreemodels") {
                    for (var i = 0; i < data.length; i++) {
                        var OtherSetItem = data[i];
                        var itemId = OtherSetItem.ID;
                        var itemname = OtherSetItem.Name;
                        imagesHtml += ClientToolbox.GenerateOtherSetItemHtml(itemId, itemname);
                    }
                } else {
                    for (var i = 0; i < data.length; i++) {
                        var AssetSetItem = data[i];
                        var assetVersionId = AssetSetItem.AssetVersionID;
                        var itemname = AssetSetItem.Name;
                        var assetSetItemID = AssetSetItem.ID;
                        var isNewerVersionAvailable = (AssetSetItem.NewerVersionAvailable == "True");
                        imagesHtml += ClientToolbox.GenerateAssetSetItemHtml(assetVersionId, itemname, assetSetItemID, isNewerVersionAvailable, AssetSetItem.SortOrder, AssetSetItem.AssetID);
                    }
                }
                $('#ToolboxItems').html(imagesHtml);
            }
        },
        error: function (a, b, c) {
            $('#ToolboxItems').html("An error occured while retrieving this data");
        }
    });

    window.setTimeout(function () {
        if ($('#ToolboxItems').is(':empty')) {
            $('#ToolboxItems').append("<div style='text-align: center;margin-top: 25px;'><img src='/img/spinners/spinner100x100.gif' alt='Loading...' /></div>");
        }
    }, 500);
}

ClientToolbox.GenerateAssetSetItemHtml = function(assetVersionId, itemname, assetSetItemId, isNewerVersionAvailable, sortOrder, assetId) {
    var html = ClientToolbox.GenerateHtml(assetId, itemname);
    var spanId = 'span_setitem_' + assetId;
    // Spawn off a thumbnail request
    ClientToolbox.GetThumbnail(assetVersionId, spanId, 0, true);
    return html;
}

ClientToolbox.GenerateOtherSetItemHtml = function (itemId, itemname) {
    var html = ClientToolbox.GenerateHtml(itemId, itemname);
    var spanId = 'span_setitem_' + itemId;
    // Spawn off a thumbnail request
    ClientToolbox.GetThumbnail(itemId, spanId, 0, false);
    return html;
}

ClientToolbox.GenerateHtml = function (itemId, itemname) {
    var html = "";
    var spanId = 'span_setitem_' + itemId;

    if (ClientToolbox.ClientToolboxIE9DragEnabled) {
        html += "<span class='ToolboxItem' id='" + spanId + "' onmouseover='this.style.borderStyle=\"outset\"' onmouseout='this.style.borderStyle=\"solid\"' ondragstart='dragRBX(" + itemId + ")' ondragend='insertContent(" + itemId + ")'>";
        html += "<a onclick='insertContent(" + itemId + ")' style='display:inline-block;height:62px;width:60px;cursor:pointer;' title='" + itemname + "'>";
    } else {
        html += "<span class='ToolboxItem' id='" + spanId + "' onmouseover='this.style.borderStyle=\"outset\"' onmouseout='this.style.borderStyle=\"solid\"' ondragstart='dragRBX(" + itemId + ")'>";
        html += "<a href='javascript:insertContent(" + itemId + ")' style='display:inline-block;height:62px;width:60px;cursor:pointer;' title='" + itemname + "'>";
    }

    html += "<img alt='" + itemname.escapeHTML() + "' id='img_" + spanId + "' src='/thumbs/unavailable.jpg' border='0px' style='height:62px;width:60px;' onerror='return Roblox.Controls.Image.OnError(this)'/>";
    html += "</a>";
    html += "</span>";

    return html;
}

ClientToolbox.GetThumbnail = function (id, spanId, attemptCount, useVersionID) {
    url = "/Thumbs/RawAsset.ashx?Width=60&Height=62&ImageFormat=png"
    if (useVersionID)
        url += "&AssetVersionID=";
    else
        url += "&AssetID=";
    url += id;

    $.get(
        url,
        function (data) {
            if (data !== null) {
                if (data == "PENDING") {
                    if (attemptCount < 4) {
                        window.setTimeout(function () { ClientToolbox.GetThumbnail(id, spanId, attemptCount + 1, useVersionID); }, 3000);
                    }
                    return;
                }
                $('#img_' + spanId).attr("src", data);
            }
        });
}