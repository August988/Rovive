<table class="item-table" data-item-id="<%= gameid %>" data-rootplace-id="<%= gameid %>"
    data-configure-url="https://www.rovive.pro/universes/configure?id=<%= gameid %>"
    data-configure-localization-url="https://www.rovive.pro/localization/games/<%= gameid %>/configure"
    data-create-badge-url="https://www.rovive.pro/develop?selectedPlaceId=<%= gameid %>&amp;View=21"
    data-create-gamepass-url="https://www.rovive.pro/develop?selectedPlaceId=<%= gameid %>&amp;View=34"
    data-developerstats-url="https://create.rovive.pro/creations/games/<%= gameid %>/stats"
    data-advertise-url="https://www.rovive.pro/user-ads/create?targetId=<%= gameid %>&amp;targetType=Asset"
    data-activate-universe-url="https://develop.rovive.pro/v1/universes/<%= gameid %>/activate"
    data-deactivate-universe-url="https://develop.rovive.pro/v1/universes/<%= gameid %>/deactivate"
    data-type="universes">
    <tbody>
        <tr>
            <td class="image-col universe-image-col" style="text-align: center">
                <a href="https://www.rovive.pro/universes/configure?id=<%= gameid %>" class="game-image">
                    <img src="<%= gameiconthumbnail %>" alt="<%= gamename %>">
                </a>
            </td>
            <td class="universe-name-col">
                <a class="title" href="https://www.rovive.pro/universes/configure?id=<%= gameid %>"><%= gamename %></a>
                <table class="details-table">
                    <tbody>
                        <tr>
                            <td class="item-universe">
                                <span>Start Place:</span>
                                <a class="title start-place-url"
                                    href="https://www.rovive.pro/games/<%= gameid %>/<%= gamename2 %>"><%= gamename %></a>
                            </td>
                        </tr>
                        <tr class="activate-cell">
                            <td>
                                <a class="<%= placeActive %>"
                                    href="https://www.rovive.pro/universes/configure?id=<%= gameid %>"><%= pubtext %></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td class="edit-col">
                <a class="btn-control btn-control-large"
                    href="https://www.rovive.pro/sponsored/games/<%= gameid %>/create">Sponsor</a>
            </td>

            <td class="edit-col">
                <a class="roblox-edit-button btn-control btn-control-large" href="javascript:;">Edit</a>
            </td>
            <td class="menu-col">
                <div class="gear-button-wrapper">
                    <a href="#" class="gear-button"></a>
                </div>
            </td>
        </tr>
    </tbody>
</table>
<div class="separator"></div>