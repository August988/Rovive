<?php
header("content-type: text/plain"); 
ob_start();?>
 
pcall(function() game:GetService("InsertService"):SetFreeModelUrl("http://www.rovive.pro/Game/Tools/InsertAsset.ashx?type=fm&q=%s&pg=%d&rs=%d") end)
pcall(function() game:GetService("InsertService"):SetFreeDecalUrl("http://www.rovive.pro/Game/Tools/InsertAsset.ashx?type=fd&q=%s&pg=%d&rs=%d") end)
 
game:GetService("ScriptInformationProvider"):SetAssetUrl("http://www.rovive.pro/Asset/")
game:GetService("InsertService"):SetBaseSetsUrl("http://www.rovive.pro/Game/Tools/InsertAsset.ashx?nsets=10&type=base")
game:GetService("InsertService"):SetUserSetsUrl("http://www.rovive.pro/Game/Tools/InsertAsset.ashx?nsets=20&type=user&userid=%d")
game:GetService("InsertService"):SetCollectionUrl("http://www.rovive.pro/Game/Tools/InsertAsset.ashx?sid=%d")
game:GetService("InsertService"):SetAssetUrl("http://www.rovive.pro/Asset/?id=%d")
game:GetService("InsertService"):SetAssetVersionUrl("http://www.rovive.pro/Asset/?assetversionid=%d")
 
pcall(function() game:GetService("SocialService"):SetFriendUrl("http://www.rovive.pro/Game/LuaWebService/HandleSocialRequest.ashx?method=IsFriendsWith&playerid=%d&userid=%d") end)
pcall(function() game:GetService("SocialService"):SetBestFriendUrl("http://www.rovive.pro/Game/LuaWebService/HandleSocialRequest.ashx?method=IsBestFriendsWith&playerid=%d&userid=%d") end)
pcall(function() game:GetService("SocialService"):SetGroupUrl("http://www.rovive.pro/Game/LuaWebService/HandleSocialRequest.ashx?method=IsInGroup&playerid=%d&groupid=%d") end)
pcall(function() game:GetService("SocialService"):SetGroupRankUrl("http://www.rovive.pro/Game/LuaWebService/HandleSocialRequest.ashx?method=GetGroupRank&playerid=%d&groupid=%d") end)
pcall(function() game:GetService("SocialService"):SetGroupRoleUrl("http://www.rovive.pro/Game/LuaWebService/HandleSocialRequest.ashx?method=GetGroupRole&playerid=%d&groupid=%d") end)
pcall(function() game:GetService("GamePassService"):SetPlayerHasPassUrl("http://www.rovive.pro/Game/GamePass/GamePassHandler.ashx?Action=HasPass&UserID=%d&PassID=%d") end)
pcall(function() game:GetService("MarketplaceService"):SetProductInfoUrl("http://www.rovive.pro/marketplace/productinfo?assetId=%d") end)
pcall(function() game:GetService("MarketplaceService"):SetPlayerOwnsAssetUrl("http://www.rovive.pro/ownership/hasasset?userId=%d&assetId=%d") end)
 
game:GetService("ScriptContext"):AddStarterScript(37801172) 
 
<?php
$data = "\r\n" . ob_get_clean();
$key = file_get_contents($_SERVER['DOCUMENT_ROOT']."/config/PrivateKey.pem");
openssl_sign($data, $sig, $key, OPENSSL_ALGO_SHA1);
echo "%" . base64_encode($sig) . "%" . $data;
?>
 
