
<div id="AddDeveloperProduct" class="developerProductModificationForm">
    <div class="headline">
        <h2 class="innerTitle">
            Edit Developer Product</h2>
    </div>
    <input type="hidden" id="DeveloperProductUniverseID" value="<%= gameid %>"/>
    <input type="hidden" id="DeveloperProductID" value="<%= id %>"/>
    <div id="DeveloperProductsLoading">
        <img class="developerProductsLoadingImage" src='/img/ec4e85b0c4396cf753a06fade0a8d8af.gif' />
    </div>
    <div id="DeveloperProductsError" >
        An error occurred while processing your request.  Please try again later.
    </div>
    <div id="AddDeveloperProductInnerContainer">
        <div>
                <input type="hidden" id="DeveloperProductIconId" />
        </div>

        <div>
            <span class="form-label">Name:</span>
            <span id="NameValidation" class="validationMessage" style="display:none"></span>
        </div>
        <div>
            <input type="text" class="text-box text-box-medium nameBox" id="DeveloperProductName" value="<%= name %>" validation-url="/places/check-developerproduct-name?universeId=<%= gameid %>&amp;developerProductId=<%= id %>"/>
        </div>
        <div>
            <span class="form-label">Description:</span>
        </div>
        <div>
            <textarea class="text-box text-area-medium nameBox" cols="80" id="DeveloperProductDescription" name="textbox" rows="6"><%= desc %></textarea>
            <span id="DescriptionValidation" class="validationMessage" style="display:none"></span>
        </div>
        <div>
            <span class="form-label">Price In Robux:</span>
            <span id="RobuxValidation" class="validationMessage" style="display:none"></span>
        </div>
        <div>
            <input type="text" class="text-box text-box-medium priceBox" id="DeveloperProductPriceInRobux" value="<%= price %>" />
            
        </div>
        
<form action="/places/developerproduct-icon?developerProductId=<%= id %>" enctype="multipart/form-data" id="ImageUploadForm" method="post" target="ImageUploaderIframe">            <div id="DeveloperProductImageUpload">
                <input name="__RequestVerificationToken" type="hidden" value="<%= xcsrftoken %>" />
                <label for="DeveloperProductImageFile" class="form-label" style="width: 150px;">Select image:</label>
                <input type="file" id="DeveloperProductImageFile" class="imageUpload" name="DeveloperProductImageFile"/>
            </div>
</form>        <iframe id="ImageUploaderIframe" src="" name="ImageUploaderIframe" frameBorder="0" class="developerProductsImageUploadIframe" style="display:none;;">
            
        </iframe>
        <div class="confirmationButtonSection" style="margin-top:10px">
            <div>
    <a  data-form-post-url="/places/developerproducts/update" class="btn-small btn-neutral developer-product-button">Update</a>                <a  data-url="/places/developerproducts?universeId=<%= gameid %>&amp;pageNo=1&amp;pageSize=10" class="btn-small btn-negative cancel-button" id="cancel">Cancel</a>
            </div>
        </div>
    </div>
</div>


