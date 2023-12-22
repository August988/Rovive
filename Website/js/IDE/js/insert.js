ClientToolbox.IsUserAuthenticated = true;
ClientToolbox.IsDecalCreationEnabled = true;
ClientToolbox.RequestURL = 'http://m_blox.com/asset/';
ClientToolbox.ClientToolboxIE9DragEnabled = false;

function insertContent(id) {
    try {
        window.external.Insert(ClientToolbox.RequestURL + "?id=" + id);
    }
    catch (x) {
        alert("Oops! we failed in inserting the requested item. Sorry!");
    }
}
function dragRBX(id) {
    try {
        window.external.StartDrag(ClientToolbox.RequestURL + "?id=" + id);
    }
    catch (x) {
        alert("Oops! we failed in dragging the requested item. Sorry!");
    }
}
function disableEnterKey(e)
{
    var key;
    if(window.event)
        key = window.event.keyCode; //IE
    else
        key = e.which; //firefox
    return (key != 13);
}

$("#tbSearch").keyup(function(event){
    if(event.keyCode == 13){
        $("#Button").click();
        return false;
    }
});

$(function()
{
    try
    {
        ClientToolbox.OnPageLoad();
    }
    catch (x) { }
});