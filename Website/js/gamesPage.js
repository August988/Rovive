// Games/gamesPage.js
("use strict");
var Roblox = Roblox || {};
Roblox.GamesPage = (function () {
    var r = Roblox.GamesPageConstants,
        t,
        i,
        n,
        f,
        u = {
            adSpacerClass: "abp-spacer",
            lastWindowWidth: null,
            lastWindowHeight: null,
            lastRightSidebarTop: null,
            lastScrollTop: 0,
            state: null,
            settings: null,
            adjustGamesListsHeights: function () {
                for (
                    var t = this.getState(), n = 0;
                    n < t.gamesListArray.length;
                    n++
                )
                    t.gamesListArray[n].setHeight();
            },
            bindEvents: function () {
                this.bindResize(), this.bindScroll(), this.bindVotes();
            },
            bindHistory: function () {
                var n = this.handleURLChange.bind(this),
                    t = this.history;
                t.Adapter.bind(window, "statechange", function () {
                    n();
                });
            },
            bindResize: function () {
                $(window).on("resize", this.handleResize.bind(this));
            },
            bindScroll: function () {
                $(window).on("scroll", $.proxy(this.handleScroll, this));
            },
            bindVotes: function () {
                var n = this.getGamesPageContainer();
                if (n && !Roblox.DeviceFeatureDetection.isTouch)
                    n.find(".game-cards .game-card").on({
                        mouseover: function () {
                            $(this)
                                .find(".vote-container .vote-percentage")
                                .addClass("hover");
                        },
                        mouseout: function () {
                            $(this)
                                .find(".vote-container .vote-percentage")
                                .removeClass("hover");
                        },
                    });
            },
            calculateNumberOfColumns: function () {
                var i,
                    f = Roblox.GamesPageConstants,
                    n,
                    t,
                    r = this.getState(),
                    u;
                (n =
                    r.searchState === f.searchState.on
                        ? this.getGamesListElements().filter(":visible").last()
                        : this.getGamesListElements()
                              .filter(":visible")
                              .first()),
                    (i = n.width()),
                    (t = $("<div></div>")
                        .addClass("game-card")
                        .addClass("hidden")),
                    n.find(".game-cards-grid").append(t),
                    (u = t.outerWidth(!0)),
                    t.remove(),
                    (r.numberOfColumns = Math.floor(i / u));
            },
            fetchThumbnails: function (n) {
                var t = this.getSettings(),
                    i = 300;
                $("[data-retry-url]").loadRobloxThumbnails(),
                    t.isGamesThumbnailAsyncEnabled &&
                        Roblox.LazyLoadImg &&
                        Roblox.LazyLoadImg.init(i, n);
            },
            getAdSpacer: function () {
                return $("<div/>").addClass(this.adSpacerClass);
            },
            getGamesPageContainer: function () {
                return n || (n = $("#ResponsiveWrapper")), n;
            },
            getGamesListElements: function () {
                return (
                    t ||
                        (t = this.getGamesListsContainer().find(
                            ".games-list-container"
                        )),
                    t
                );
            },
            getGamesListObject: function (n) {
                for (
                    var i = this.getState(), t = 0;
                    t < i.gamesListArray.length;
                    t++
                )
                    if (i.gamesListArray[t].divId === "GamesListContainer" + n)
                        return i.gamesListArray[t];
                return null;
            },
            getGamesListsContainer: function () {
                return i || (i = $("#GamesListsContainer")), i;
            },
            getGamesListsContainerHeight: function () {
                var n = this.getGamesListsContainer();
                return n && n.length ? parseInt(n.css("min-height")) : 0;
            },
            getLeftColumnElement: function () {
                return $("#GamesPageLeftColumn");
            },
            getRightSidebarElement: function () {
                return $("#GamesPageRightColumnSidebar");
            },
            getSettings: function () {
                return this.settings;
            },
            getState: function () {
                return this.state;
            },
            getURLBasedOnSortFilter: function (n) {
                return $.inArray(n, r.userSpecificSortFilters) !== -1
                    ? r.urls.moreResultsUncached
                    : r.urls.moreResultsCached;
            },
            getURLStringAndObjectFromPageState: function () {
                var t = Roblox.GamesPage.Filters,
                    n = t.getFiltersFromDOM(),
                    i = "?" + $.param(n);
                return { urlStateString: i, urlStateObject: n };
            },
            handleResize: function () {
                var t = $(window).width(),
                    n = $(window).height(),
                    i = this.getSettings(),
                    r = this.getState();
                this.updateCarouselButtons(),
                    t > this.lastWindowWidth || n > this.lastWindowHeight
                        ? setTimeout(
                              this.handleResizeGrow.bind(this),
                              i.resizeGrowInterval
                          )
                        : (t < this.lastWindowWidth ||
                              n < this.lastWindowHeight) &&
                          setTimeout(
                              this.handleResizeShrink.bind(this),
                              i.resizeShrinkInterval
                          ),
                    (this.lastWindowWidth = t),
                    (this.lastWindowHeight = n),
                    (r.distanceFromBottomAtWhichToLoadMoreGames = n / 2);
            },
            handleResizeGrow: function () {
                this.adjustGamesListsHeights(),
                    !this.isInMultiViewMode() &&
                        this.shouldLoadMoreGames() &&
                        this.loadGames();
            },
            handleResizeShrink: function () {
                this.isInMultiViewMode() && this.adjustGamesListsHeights();
            },
            handleScroll: function () {
                var t = Roblox.GamesPageConstants,
                    n = window.scrollY,
                    i = Roblox.GamesPage.Search,
                    r = this.getState();
                window.scrollY || (n = document.documentElement.scrollTop),
                    this.isInMultiViewMode() ||
                        (n > this.lastScrollTop &&
                            this.shouldLoadMoreGames() &&
                            (r.searchState === t.searchState.on
                                ? i.search()
                                : this.loadGames())),
                    (this.lastScrollTop = n);
            },
            handleURLChange: function () {
                var u = Roblox.AdsHelper.GamesPage,
                    e = Roblox.GamesPage.Filters,
                    n,
                    i = Roblox.GamesPage.Search,
                    t = this.getState(),
                    f = !1,
                    r;
                if (
                    ((n = this.history.getState().data),
                    !t.areFiltersAlreadyUpdated) &&
                    Object.keys(n).length !== 0
                ) {
                    if (n.hasOwnProperty("keyword"))
                        (t.currentSearchQuery = n.keyword),
                            i.getSearchResultsQueryTextElement().text() !==
                                t.currentSearchQuery && i.search();
                    else {
                        i.toggleSearch("reset"), (t.isURLAlreadyUpdated = !0);
                        for (r in n) e.handleFilterChange(r, n[r]);
                        (t.isURLAlreadyUpdated = !1),
                            t.haveGamesBeenFetched && (f = !0),
                            this.loadInitialGames(f);
                    }
                    u.checkAdDisplayState(), u.refreshOldAds();
                }
            },
            hideGamesLists: function () {
                for (
                    var t = this.getState(), n = 0;
                    n < t.gamesListArray.length;
                    n++
                )
                    t.gamesListArray[n].hide();
                t.numberOfShownGamesLists = 0;
            },
            init: function () {
                var n = Roblox.AdsHelper.GamesPage;
                this.initHistory(),
                    this.bindHistory(),
                    this.initSettings(),
                    this.initState(),
                    this.initSubmodules(),
                    this.bindEvents(),
                    (document.title = this.getSettings().pageTitle),
                    this.initGamesLists(),
                    this.initURL(),
                    this.saveCurrentDimensions(),
                    this.state.haveGamesBeenFetched || this.handleURLChange(),
                    n.checkAdDisplayState();
            },
            initGamesLists: function () {
                var t,
                    i,
                    r,
                    u,
                    f,
                    n,
                    e,
                    o = this.state;
                this.getGamesListElements().each(function () {
                    (t = $(this).attr("id")),
                        (i = $(this).data("sortfilter")),
                        (r = $(this).data("gamefilter")),
                        (u = $(this).data("regionfilter")),
                        (f = $(this).data("minbclevel")),
                        (e = $(this).data("personalized-universe-id")),
                        (n = new Roblox.GamesPage.GamesList(t, i, r, u, f, e)),
                        n.init(),
                        o.gamesListArray.push(n);
                }),
                    (o.gamesListArray[0].isFirst = !0);
            },
            initHistory: function () {
                this.history = window.History;
            },
            initSettings: function () {
                (this.settings = new Roblox.GamesPage.Settings()),
                    this.settings.init();
            },
            initState: function () {
                this.state = new Roblox.GamesPage.State();
            },
            initSubmodules: function () {
                var n = Roblox.GamesPage.Filters,
                    t = Roblox.GamesPage.Search;
                t.init(), n.init();
            },
            initURL: function () {
                var n = {},
                    t = this.getSettings();
                t.gamesSearchOnPage && t.incomingSearchQuery !== ""
                    ? this.updateURLFromSearchState()
                    : ((n = this.getURLStringAndObjectFromPageState()),
                      this.history.replaceState(
                          n.urlStateObject,
                          t.pageTitle,
                          n.urlStateString
                      ));
            },
            isInMultiViewMode: function () {
                return this.state.isInMultiViewMode;
            },
            isTouch: function () {
                return Roblox.DeviceFeatureDetection
                    ? Roblox.DeviceFeatureDetection.isTouch
                    : !1;
            },
            loadGames: function () {
                for (
                    var t = this.state, n = 0;
                    n < t.gamesListArray.length;
                    n++
                )
                    t.gamesListArray[n].isShown &&
                        t.gamesListArray[n].loadGames();
            },
            loadInitialGames: function (n) {
                var t = this.state;
                Roblox.GamesPage.calculateNumberOfColumns(),
                    this.loadGames(),
                    (t.haveGamesBeenFetched = !0),
                    n && this.refreshAds();
            },
            refreshAds: function () {
                var t = Roblox.AdsHelper.GamesPage,
                    n;
                t.refreshAds(),
                    (n = $("#GamesRightColumn")[0]),
                    n &&
                        n.contentWindow &&
                        n.contentWindow.Roblox &&
                        n.contentWindow.Roblox.RightColumnBehavior &&
                        n.contentWindow.Roblox.RightColumnBehavior.refreshAds();
            },
            resetDomSelectors: function () {
                (n = null), (i = null), (t = null), (n = null), (f = null);
            },
            resetGamesLists: function () {
                for (
                    var t = this.state, n = 0;
                    n < t.gamesListArray.length;
                    n++
                )
                    t.gamesListArray[n].reset();
            },
            saveCurrentDimensions: function () {
                var n = this.getRightSidebarElement();
                (this.lastWindowWidth = $(window).width()),
                    (this.lastWindowHeight = $(window).height()),
                    n.length && (this.lastRightSidebarTop = n.position().top);
            },
            setInfiniteScroll: function (n) {
                n
                    ? (this.getGamesPageContainer().addClass(
                          "games-lists-single"
                      ),
                      this.getGamesPageContainer().removeClass(
                          "games-lists-multiple"
                      ))
                    : (this.getGamesPageContainer().removeClass(
                          "games-lists-single"
                      ),
                      this.getGamesPageContainer().addClass(
                          "games-lists-multiple"
                      ));
            },
            shouldLoadMoreGames: function () {
                var n = this.getState();
                return (
                    $(window).scrollTop() >=
                    $(document).height() -
                        $(window).height() -
                        n.distanceFromBottomAtWhichToLoadMoreGames
                );
            },
            showGamesList: function (n) {
                var i = this.getState(),
                    t = this.getGamesListObject(n);
                t && (t.show(), i.numberOfShownGamesLists++);
            },
            updateCarouselButtons: function () {
                for (
                    var t = this.getState(), n = 0;
                    n < t.gamesListArray.length;
                    n++
                )
                    t.gamesListArray[n].toggleCarouselButtons();
            },
            updateURLFromPageState: function () {
                var n = this.getURLStringAndObjectFromPageState(),
                    t = this.getSettings();
                (this.state.areFiltersAlreadyUpdated = !0),
                    this.history.pushState(
                        n.urlStateObject,
                        t.pageTitle,
                        n.urlStateString
                    ),
                    (this.state.areFiltersAlreadyUpdated = !1);
            },
            updateURLFromSearchState: function () {
                var n = this.state.currentSearchQuery,
                    t = this.getSettings(),
                    i = { keyword: n },
                    r = t.pageTitle,
                    u = "?Keyword=" + encodeURIComponent(n);
                this.history.pushState(i, r, u);
            },
            updateVotes: function () {
                var n = $("[data-voting-processed=false]");
                n.each(function (n, t) {
                    var i = $(t),
                        r = i.find(".vote-container"),
                        u = parseInt(r.attr("data-upvotes")),
                        f = parseInt(r.attr("data-downvotes"));
                    Roblox.Voting.UpdateVoteBar(u, f, i),
                        i.attr("data-voting-processed", !0);
                });
            },
        };
    return (
        $(function () {
            u.init();
        }),
        u
    );
})(); // Games/filters.js

("use strict");
var Roblox = Roblox || {};
Roblox.GamesPage.Filters = (function () {
    var n = Roblox.GamesPageConstants,
        t,
        r,
        u,
        f;
    return {
        selectorFilterSelected: ".rbx-selection-label",
        sortFiltersForWhichGenreFiltersShouldBeHidden: [],
        sortFiltersForWhichTimeFiltersShouldBeHidden: [],
        bindFilterSelectActions: function () {
            var t,
                u = this.handleFilterChange.bind(this),
                r = Roblox.GamesPage,
                i,
                n,
                f = this.getState();
            this.getFilterElements().each(function () {
                $(this).on("change", function () {
                    (t = $(this).attr("id")),
                        (i = $(this).find("select")),
                        (n =
                            i && i.length
                                ? $(this).find("option:checked").data("value")
                                : $(this)
                                      .find("[data-bind='label']")
                                      .data("value")),
                        n &&
                            t &&
                            (u(t, n),
                            f.isURLAlreadyUpdated || r.updateURLFromPageState(),
                            r.loadInitialGames(!0));
                });
            });
        },
        bindFilterSelectBehavior: function () {
            $('[data-toggle="dropdown-menu"]  li').click(function (n) {
                var t = $(n.currentTarget);
                t.closest(".input-group-btn")
                    .find('[data-bind="label"]')
                    .data("value", t.data("value"))
                    .end()
                    .end()
                    .trigger("change");
            }),
                $('.games-selection [data-toggle="selection"]').change(
                    function (n) {
                        var t = $(n.currentTarget),
                            i = $(this).find("option:selected").data("value");
                        t.parent().find('[data-bind="label"]').data("value", i);
                    }
                );
        },
        filtersObjectCorrectTimeFilter: function (n) {
            var t = Roblox.GamesPageConstants;
            typeof n[t.sortFilters.timeFilter] != "undefined" &&
                n[t.sortFilters.timeFilter] === t.timeFilters.current &&
                typeof n[t.sortFilters.sortFilter] != "undefined" &&
                this.isSortFilterNeedingWeeklyDefault(
                    n[t.sortFilters.sortFilter]
                ) &&
                (n[t.sortFilters.timeFilter] = t.timeFilters.weekly);
        },
        filtersObjectAppendBC: function (n) {
            var r = this.getSettings(),
                u = this.getState(),
                i = u.gamesListArray,
                t;
            if (!r.isInMultiViewMode)
                for (t = 0; t < i.length; t++)
                    i[t].isShown && i[t].minBCLevel === 1 && (n.BC = 1);
            return n;
        },
        getDefaultTimeFilterForSortFilter: function (n, t) {
            var i = Roblox.GamesPageConstants,
                r = this.getTimeFilterContainer()
                    .find(this.selectorFilterSelected)
                    .data("default"),
                u = Roblox.GamesPage.isInMultiViewMode(),
                f = this.isSortFilterNeedingWeeklyDefault(n);
            return (
                f
                    ? (t === i.timeFilters.current || u) &&
                      (t = i.timeFilters.weekly)
                    : (r === i.timeFilters.current ||
                          t === i.timeFilters.current) &&
                      (t = r),
                t
            );
        },
        getFiltersContainer: function () {
            return t || (t = $("#FiltersAndSort")), t;
        },
        getFilterElements: function () {
            return $(".games-page-filters .games-page-filter");
        },
        getFiltersFromDOM: function () {
            var n = {},
                t = this.selectorFilterSelected;
            return (
                this.getFilterElements().each(function () {
                    var i = $(this).attr("id"),
                        r = $(this).find(t).data("value");
                    typeof r != "undefined" &&
                        i &&
                        !$(this).hasClass("hidden") &&
                        (n[i] = r);
                }),
                this.filtersObjectCorrectTimeFilter(n),
                this.filtersObjectAppendBC(n),
                n
            );
        },
        getGenreFilterContainer: function () {
            return $("#" + n.sortFilters.genreFilter);
        },
        getSettings: function () {
            return Roblox.GamesPage.getSettings();
        },
        getFilterElementByType: function (n) {
            var t = Roblox.GamesPageConstants,
                i = [
                    t.sortFilters.genreFilter,
                    t.sortFilters.sortFilter,
                    t.sortFilters.timeFilter,
                ];
            return $.inArray(n, i) !== -1 ? $("#" + n) : null;
        },
        getSortFilterContainer: function () {
            return $("#" + n.sortFilters.sortFilter);
        },
        getState: function () {
            return Roblox.GamesPage.state;
        },
        getTimeFilterContainer: function () {
            return $("#" + n.sortFilters.timeFilter);
        },
        handleFilterChange: function (n, t) {
            var i = Roblox.GamesPageConstants,
                r = Roblox.GamesPage;
            r.resetGamesLists();
            switch (n) {
                case i.sortFilters.sortFilter:
                    this.toggleFiltersEnabled(t),
                        this.handleSortFilterChange(t);
                    break;
                case i.sortFilters.timeFilter:
                    this.handleTimeFilterChange(t);
                    break;
                case i.sortFilters.genreFilter:
                    this.handleGenreFilterChange(t);
            }
            this.setFilterGroupButtonValue(n, t);
        },
        handleGamesFilterResetClick: function () {
            var t = Roblox.GamesPage;
            Roblox.GamesPage.Search.toggleSearch("reset"),
                this.handleFilterChange("SortFilter", "default"),
                t.updateURLFromPageState(),
                t.loadInitialGames(!0);
        },
        handleGenreFilterChange: function (n) {
            for (
                var i = this.getState(), t = 0;
                t < i.gamesListArray.length;
                t++
            )
                i.gamesListArray[t].genreId = n;
        },
        handleSortFilterChange: function (n) {
            var t = Roblox.GamesPage;
            t.hideGamesLists(), this.showGamesLists(n), this.resetTimeFilter(n);
        },
        handleTimeFilterChange: function (n) {
            for (
                var i = this.getState(), t = 0;
                t < i.gamesListArray.length;
                t++
            )
                i.gamesListArray[t].timeFilter = n;
        },
        init: function () {
            var n = Roblox.GamesPageConstants,
                t,
                i,
                r;
            (i = this.getSortFilterContainer()
                .find(this.selectorFilterSelected)
                .data("default")),
                this.setFilterGroupButtonValue(n.sortFilters.sortFilter, i),
                (t = this.getGenreFilterContainer()
                    .find(this.selectorFilterSelected)
                    .data("default")),
                this.setFilterGroupButtonValue(n.sortFilters.genreFilter, t),
                (r = this.getTimeFilterContainer()
                    .find(this.selectorFilterSelected)
                    .data("default")),
                this.setFilterGroupButtonValue(n.sortFilters.sortFilter, r),
                this.initSortFiltersHidden(),
                this.bindFilterSelectActions(),
                this.bindFilterSelectBehavior();
        },
        initSortFiltersHidden: function () {
            var n = this.getSortFilterContainer(),
                t = this.sortFiltersForWhichTimeFiltersShouldBeHidden,
                i = this.sortFiltersForWhichGenreFiltersShouldBeHidden;
            n.find("[data-hidetimefilter]").each(function (n, i) {
                t.push($(i).data("value"));
            }),
                n.find("[data-hidegenrefilter]").each(function (n, t) {
                    i.push($(t).data("value"));
                });
        },
        isSortFilterNeedingWeeklyDefault: function (t) {
            var i = this.getSettings(),
                r = i.defaultWeeklyRatings,
                u = i.gamesPageDefaultTopPaidToWeekly;
            return (r && t === n.sortFilterTypeIds.topRated) ||
                (u && t === n.sortFilterTypeIds.topPaid) ||
                t === n.sortFilterTypeIds.experimental ||
                t === n.sortFilterTypeIds.buildersClub ||
                t === n.sortFilterTypeIds.topFavorite ||
                t === n.sortFilterTypeIds.topRetaining
                ? !0
                : !1;
        },
        resetTimeFilter: function (n) {
            var t = Roblox.GamesPageConstants;
            this.isSortFilterNeedingWeeklyDefault(n)
                ? this.setFilterGroupButtonValue(
                      t.sortFilters.timeFilter,
                      t.timeFilters.weekly
                  )
                : this.setFilterGroupButtonValue(
                      t.sortFilters.timeFilter,
                      t.timeFilters.current
                  );
        },
        setFiltersEnabled: function (n) {
            n
                ? this.getFiltersContainer().removeClass("disabled")
                : this.getFiltersContainer().addClass("disabled");
        },
        setFiltersVisible: function (n) {
            n
                ? (this.getSortFilterContainer().removeClass("hidden"),
                  this.getTimeFilterContainer().removeClass("hidden"),
                  this.getGenreFilterContainer().removeClass("hidden"))
                : (this.getSortFilterContainer().addClass("hidden"),
                  this.getTimeFilterContainer().addClass("hidden"),
                  this.getGenreFilterContainer().addClass("hidden"));
        },
        setFilterGroupButtonValue: function (n, t) {
            var u = this.getFilterElementByType(n),
                i,
                r,
                f;
            if (
                ((f = u.find(this.selectorFilterSelected)),
                (r = u.find("select")),
                r &&
                    r.length &&
                    ((i = r.find("option").filter(function () {
                        return $(this).data("value") === t;
                    })),
                    i && i.length))
            )
                return (
                    i.attr("selected", !0), f.data("value", i.data("value")), !0
                );
            (r = u.find("ul.dropdown-menu")),
                r.length &&
                    ((i = r.find("li").filter(function () {
                        return $(this).data("value") === t;
                    })),
                    i &&
                        i.length &&
                        f.text(i.text().trim()).data("value", i.data("value")));
        },
        showGamesLists: function (n) {
            var t = Roblox.GamesPage,
                f = this.getSettings(),
                u = this.getState(),
                r = f.filterValueToGamesListsIdSuffixMapping,
                i;
            if (r.hasOwnProperty(n)) {
                for (u.isInMultiViewMode = !0, i = 0; i < r[n].length; i++)
                    t.showGamesList(r[n][i]);
                t.setInfiniteScroll(!1);
            } else
                (u.isInMultiViewMode = !1),
                    t.showGamesList(n),
                    t.setInfiniteScroll(!0);
            t.adjustGamesListsHeights();
        },
        toggleFiltersEnabled: function (n) {
            var t = this.getGenreFilterContainer(),
                i = this.getTimeFilterContainer();
            $.inArray(n, this.sortFiltersForWhichTimeFiltersShouldBeHidden) !==
            -1
                ? i.addClass("hidden")
                : i.removeClass("hidden"),
                $.inArray(
                    n,
                    this.sortFiltersForWhichGenreFiltersShouldBeHidden
                ) !== -1
                    ? t.addClass("hidden")
                    : t.removeClass("hidden"),
                this.getFiltersContainer().removeClass("loading");
        },
    };
})(); // Games/gamesList.js

(Roblox = Roblox || {}),
    (Roblox.GamesPage.GamesList = function (n, t, i, r, u, f) {
        var e = Roblox.GamesPageConstants;
        (this.parent = Roblox.GamesPage),
            (this.divId = n),
            (this.id = n.replace("GamesListContainer", "")),
            (this.container = null),
            (this.gamesListElement = null),
            (this.haveGamesBeenLoaded = !1),
            (this.isFirst = !1),
            (this.isShown = !1),
            (this.sortFilter = t),
            (this.gameFilter = i),
            (this.regionFilter = r),
            (this.timeFilter = e.timeFilters.current),
            (this.genreId = 1),
            (this.minBcLevel = u),
            (this.personalizedUniverseId = f),
            (this.numberOfRowsToOccupy = 0),
            (this.numberOfGamesToFetch = 0),
            (this.numberOfGamesOnScreen = 0),
            (this.startIndex = 0),
            (this.nextPageStart = null),
            (this.jqxhr = null),
            (this.reachedHorizontalScrollMax = !1),
            (this.numberOfGamesOnLastRow = 0),
            (this.isSearchResults = !1),
            this.getContainer().hasClass("search-results-container") &&
                (this.isSearchResults = !0);
    }),
    (Roblox.GamesPage.GamesList.prototype = {
        bindFilterClick: function () {
            var n = this.handleGamesFilterChangerClick.bind(this);
            this.getContainer().on("click", ".games-filter-changer", n);
        },
        bindScrollHandlers: function () {
            var n = this.handleHorizontalScroll.bind(this);
            this.getContainer().on("click", ".scroller", function () {
                var t = $(this).hasClass("prev") ? "prev" : "next";
                n(t);
            });
        },
        buildFetchRequest: function (n, t) {
            var u = this.parent.isInMultiViewMode(),
                i = this.getSettings(),
                r = this.getState();
            return {
                SortFilter: this.sortFilter,
                TimeFilter: this.timeFilter,
                RegionFilter: this.regionFilter,
                GenreID: this.genreId,
                GameFilter: this.gameFilter,
                MinBCLevel: this.minBcLevel,
                StartRows: this.startIndex,
                MaxRows: n,
                IsUserLoggedIn: i.isUserLoggedIn,
                NumberOfRowsToOccupy: this.numberOfRowsToOccupy,
                NumberOfColumns: r.numberOfColumns,
                IsInHorizontalScrollMode: u,
                DeviceTypeId: i.deviceTypeId,
                AdSpan: r.adSpan,
                AdAlignment: t,
                v: 2,
                PersonalizedUniverseId: this.personalizedUniverseId,
                useFakeResults: i.useFakeResults,
                IsGamesThumbnailAsyncEnabled: i.isGamesThumbnailAsyncEnabled,
                ExclusiveStartId: this.nextPageStart,
            };
        },
        clearGamesListHeight: function () {
            var n = this.getRowsClass(this.numberOfRowsToOccupy);
            this.getGamesListElement().removeClass(n);
        },
        doesNextButtonFitContainer: function (n, t, i, r) {
            var f = n / t,
                u;
            return (
                (f = isNaN(f) ? 0 : Math.floor(f)),
                (r = !r || isNaN(parseInt(r)) ? 0 : Math.abs(parseInt(r))),
                (u = r / t),
                (u = isNaN(u) ? 0 : Math.floor(u)),
                i - u <= f
            );
        },
        emptyGamesList: function (n) {
            var i = this.getSettings(),
                t;
            (t = this.parent.getAdSpacer()),
                n.empty().append(t),
                (i.adsHidden || i.inApp) && t.hide();
        },
        getClosestColumnBoundary: function (n) {
            var t = this.getColumnWidth(),
                i = Math.abs(n % t);
            return n + i;
        },
        getColumnWidth: function () {
            return this.getContainer()
                .find(".list-item.game-card")
                .first()
                .outerWidth(!0);
        },
        getContainer: function () {
            return (
                this.container || (this.container = $("#" + this.divId)),
                this.container
            );
        },
        getGamesListElement: function () {
            return (
                this.gamesListElement ||
                    (this.gamesListElement =
                        this.getContainer().find(".games-list")),
                this.gamesListElement
            );
        },
        getLeftBoundaryOfLastVisibleColumn: function () {
            var n,
                t,
                i = this.getSettings();
            return (
                (n = this.getContainer().find(".games-list").width()),
                (t = Math.floor(n / i.columnWidthIncludingPadding)),
                t * i.columnWidthIncludingPadding
            );
        },
        getNumGamesToFetch: function () {
            var t,
                n = this.getSettings(),
                i = this.getState();
            return (
                (t = this.parent.isInMultiViewMode()
                    ? this.numberOfRowsToOccupy > 1
                        ? this.haveGamesBeenLoaded
                            ? n.numGamesToFetchInMultirowsModeSubsequently
                            : Math.max(
                                  n.numGamesToFetchInMultirowsMode,
                                  (i.numberOfColumns + 1) *
                                      this.numberOfRowsToOccupy
                              )
                        : this.haveGamesBeenLoaded
                        ? n.numGamesToFetchInHScrollModeSubsequently
                        : this.parent.isTouch()
                        ? n.numGamesToFetchInMobileHScrollMode
                        : n.numGamesToFetchInHScrollMode
                    : n.numGamesToFetchInVScrollMode),
                Math.min(t, n.maxNumGamesToFetchPerRequest)
            );
        },
        getRowsClass: function (n) {
            return n > 0 ? "rows-" + n : null;
        },
        getScroller: function () {
            return this.getContainer().find(".horizontally-scrollable");
        },
        getScrollerNext: function () {
            return this.getContainer().find(".scroller.next");
        },
        getScrollerPrev: function () {
            return this.getContainer().find(".scroller.prev");
        },
        getScrollerMultiView: function () {
            return this.getContainer().find(
                ".games-list .show-in-multiview-mode-only"
            );
        },
        getSettings: function () {
            return Roblox.GamesPage.getSettings();
        },
        getState: function () {
            return Roblox.GamesPage.state;
        },
        handleGamesFilterChangerClick: function () {
            var t = Roblox.AdsHelper.GamesPage,
                i = Roblox.GamesPageConstants,
                r = Roblox.GamesPage.Filters;
            return (
                r.handleFilterChange(i.sortFilters.sortFilter, this.sortFilter),
                this.parent.updateURLFromPageState(),
                this.parent.loadInitialGames(!0),
                t.checkAdDisplayState(),
                !1
            );
        },
        handleHorizontalScroll: function (n) {
            var f = this.getSettings(),
                h = this.parent.isInMultiViewMode
                    ? this.getScrollerMultiView()
                    : null,
                u = this.getScroller(),
                i,
                t,
                r,
                e,
                o,
                s;
            u.length > 0 &&
                ($(u).stop("", !0, !0),
                (i = parseInt($(u).css("left")) || 0),
                (i = this.getClosestColumnBoundary(i)),
                (r = this.getScrollerNext()),
                (e = this.getScrollerPrev()),
                n === "prev"
                    ? ((t = i + this.getLeftBoundaryOfLastVisibleColumn()),
                      (t = Math.min(t, 0)),
                      r.removeClass("disabled"))
                    : r.hasClass("disabled") ||
                      (this.loadGames(f.numGamesToAppendInHScrollMode),
                      (t = i - this.getLeftBoundaryOfLastVisibleColumn()),
                      (this.noMoreGamesToLoad ||
                          this.reachedHorizontalScrollMax) &&
                          !this.isAvailableWidthFullyOccupied(t) &&
                          r.addClass("disabled")),
                f.isGamesThumbnailAsyncEnabled &&
                    Roblox.LazyLoadImg &&
                    (o = function () {
                        Roblox.LazyLoadImg.updateImageScroll(h);
                    }),
                $(u).animate({ left: t + "px" }, { complete: o }),
                f.refreshAdsInGamesPageEnabled && this.parent.refreshAds(),
                (s = t < 0),
                s
                    ? e.removeClass("disabled")
                    : r.hasClass("disabled") || e.addClass("disabled"));
        },
        hide: function () {
            (this.isShown = !1), this.getContainer().addClass("hidden");
        },
        hideLoadingIndicator: function () {
            this.getContainer().removeClass("cursor-wait");
        },
        hideOverflow: function () {
            this.getContainer().removeClass("overflow-visible"),
                this.getContainer().addClass("overflow-hidden");
        },
        init: function () {
            this.bindScrollHandlers(),
                this.bindFilterClick(),
                this.preventScrollerDoubleClick();
        },
        initScrollers: function () {
            var n = this.parent.isInMultiViewMode();
            n && this.numberOfRowsToOccupy > 1
                ? this.getContainer().find(".scroller").remove()
                : ((this.reachedHorizontalScrollMax = !1),
                  this.getScrollerNext().removeClass("hidden"));
        },
        isAvailableWidthFullyOccupied: function (n) {
            var t, i, r, u;
            return (
                (t = this.getColumnWidth()),
                (i = this.getGamesListElement().width()),
                (r = Math.ceil(i / t)),
                (u = Math.abs(n / t)),
                this.numberOfGamesOnScreen >= u + r
            );
        },
        loadGames: function (n) {
            var t,
                i,
                r = Roblox.AdsHelper.GamesPage,
                f = Roblox.GamesPageConstants,
                e,
                o,
                l = Roblox.GamesPage.Filters,
                s = this.startIndex < 1,
                h = this.parent.isInMultiViewMode(),
                u,
                c;
            if (s) this.jqxhr && this.jqxhr.abort();
            else if (this.jqxhr || (h && this.reachedHorizontalScrollMax))
                return;
            (c = this.parent.getURLBasedOnSortFilter(this.sortFilter)),
                (u = n || this.getNumGamesToFetch()),
                (this.timeFilter = l.getDefaultTimeFilterForSortFilter(
                    this.sortFilter,
                    this.timeFilter
                )),
                s
                    ? (r.checkAdDisplayState(),
                      (this.numberOfGamesOnLastRow = 0),
                      (t = 0),
                      (i = f.initialAdHeight),
                      this.initScrollers())
                    : ((t = r.calcAdAlignment()), (i = f.subsequentAdHeight)),
                r.updateAdSpan(i),
                (o = this.buildFetchRequest(u, t)),
                (e = this.renderGamesFetched.bind(this, u)),
                h || this.showLoadingIndicator(),
                (this.jqxhr = $.get(c, o, e));
        },
        preventScrollerDoubleClick: function () {
            var n = this.getContainer();
            n.find(".scroller, .scroller .arrow, .scroller .arrow img").on(
                "dblclick",
                function (n) {
                    return (
                        n.preventDefault(),
                        window.getSelection
                            ? window.getSelection().removeAllRanges()
                            : document.selection && document.selection.empty(),
                        !1
                    );
                }
            );
        },
        renderGamesFetched: function (n, t) {
            var f = Roblox.AdsHelper.GamesPage,
                i,
                e = this.startIndex < 1,
                o = this.parent.isInMultiViewMode(),
                r,
                c,
                s,
                h = this.getSettings(),
                u;
            (this.jqxhr = null),
                (u = $("<div></div>").append(t)),
                (s = $(t).find(".game-card-container").length),
                s &&
                    ((this.haveGamesBeenLoaded = !0),
                    (this.startIndex += n),
                    (this.nextPageStart = $(u)
                        .find("#gamesListResponseModel")
                        .attr("data-next-page-start"))),
                Roblox.SponsoredGames.getSponsoredGames(u),
                o
                    ? ((i = this.getScroller().find(".games")),
                      this.numberOfRowsToOccupy > 1 &&
                          ((r = i.find(".multi-rows")),
                          r.length ||
                              ((r = $("<div/>").addClass("multi-rows")),
                              i.append(r)),
                          (i = r)))
                    : (i = this.getGamesListElement().find(".game-cards-grid")),
                e && this.emptyGamesList(i),
                i.append(u.children()),
                (this.numberOfGamesOnScreen = $(i).find(
                    ".game-card-container"
                ).length),
                o
                    ? ((this.reachedHorizontalScrollMax =
                          this.numberOfGamesOnScreen >
                          h.maxNumGamesToFetchInHScrollMode),
                      e &&
                          (this.numberOfGamesOnScreen <
                              h.minNumGamesForPersonalizedByLikedToAppear &&
                              this.personalizedUniverseId !== 0 &&
                              this.getContainer().hide(),
                          this.resetHorizontalScroller(),
                          s &&
                              ((this.noMoreGamesToLoad =
                                  this.numberOfGamesOnScreen < n),
                              (c = this.getNumGamesToFetch()),
                              this.noMoreGamesToLoad ||
                                  this.reachedHorizontalScrollMax ||
                                  !c ||
                                  this.loadGames())),
                      this.toggleCarouselButtons())
                    : e &&
                      this.numberOfGamesOnScreen >
                          h.numGamesToFetchInVScrollMode &&
                      this.loadGames(),
                f.checkAdDisplayState(),
                f.populateNewAds(),
                f.refreshOldAds(),
                this.hideLoadingIndicator(),
                this.parent.updateVotes(),
                o
                    ? this.parent.fetchThumbnails(this.getScrollerMultiView())
                    : this.parent.fetchThumbnails();
        },
        reset: function () {
            (this.startIndex = 0),
                (this.nextPageStart = null),
                (this.haveGamesBeenLoaded = !1),
                this.parent.isInMultiViewMode() &&
                    this.resetHorizontalScroller(),
                this.resetPageScroll();
        },
        resetPageScroll: function () {
            $("html, body").animate({ scrollTop: 0 }, 0);
        },
        resetHorizontalScroller: function () {
            var n = this.getScroller();
            n.length > 0 && $(n).css("left", 0),
                this.getScrollerPrev().addClass("disabled"),
                this.getScrollerNext().removeClass("disabled");
        },
        setHeight: function () {
            var n = Roblox.GamesPageConstants,
                i = this.getGamesListElement(),
                t,
                r = this.getSettings(),
                u = this.getState(),
                f,
                e,
                o,
                s;
            this.isShown
                ? u.isInMultiViewMode
                    ? (this.hideOverflow(),
                      (t =
                          this.isFirst && r.isUserEligibleForMultirowFirstSort
                              ? r.numRowsForTopList
                              : this.getContainer().data("numberofrows")),
                      (this.numberOfRowsToOccupy = t),
                      this.setGamesListHeight())
                    : (this.clearGamesListHeight(),
                      this.showOverflow(),
                      (e = this.parent.getGamesListsContainerHeight()),
                      (o = i ? Math.round(i.offset().top) : 0),
                      (f =
                          Math.max($(window).height(), e) -
                          (o + n.rowHeightOffset)),
                      (s = Math.floor(f / n.rowHeightIncludingPadding)),
                      (this.numberOfRowsToOccupy = Math.max(
                          1,
                          Math.floor(2 * s)
                      )))
                : this.hideOverflow(),
                this.isSearchResults &&
                    u.searchState === n.searchState.on &&
                    this.showOverflow();
        },
        setGamesListHeight: function () {
            var n = this.getRowsClass(this.numberOfRowsToOccupy);
            this.getGamesListElement().addClass(n);
        },
        show: function () {
            this.parent.isInMultiViewMode()
                ? (this.getGamesListElement()
                      .find(
                          ".game-card-container,.games-list-column,.in-game-search-ad, .list-item.game-card"
                      )
                      .remove(),
                  this.getContainer()
                      .find(".show-in-multiview-mode-only")
                      .removeClass("hidden"))
                : this.getContainer()
                      .find(".show-in-multiview-mode-only")
                      .addClass("hidden"),
                (this.isShown = !0),
                this.getContainer().removeClass("hidden");
        },
        showLoadingIndicator: function () {
            this.getContainer().addClass("cursor-wait");
        },
        showOverflow: function () {
            this.clearGamesListHeight(),
                this.getContainer().removeClass("overflow-hidden"),
                this.getContainer().addClass("overflow-visible");
        },
        toggleCarouselButtons: function () {
            var t = this.getScroller().css("left"),
                i = this.numberOfGamesOnScreen,
                r = this.getContainer()
                    .find(".list-item")
                    .first()
                    .outerWidth(!0),
                u = this.doesNextButtonFitContainer(
                    this.getContainer().width(),
                    r,
                    i,
                    t
                );
            this.getContainer()
                .find(".scroller.next")
                .toggleClass("disabled", u);
        },
    }); // Games/GamesPageInteraction.js

("use strict");
typeof Roblox == "undefined" && (Roblox = {}),
    typeof Roblox.GamesPageInteraction == "undefined" &&
        (Roblox.GamesPageInteraction = (function () {
            function n(n, t) {
                Roblox.EventStream &&
                    Roblox.EventStream.SendEvent("gamesPageInteraction", n, t);
            }
            function t(n) {
                switch (n.attr("id")) {
                    case "SortFilter":
                        return "SFMenu";
                    case "TimeFilter":
                        return "TFMenu";
                    case "GenreFilter":
                        return "GFMenu";
                }
                return "";
            }
            function r(i) {
                n(t(i), { aType: "focus" });
            }
            function u(i) {
                n(t(i), { aType: "offFocus" });
            }
            function f(i, r) {
                var u = $("ul.dropdown-menu li", i).index(r) + 1,
                    f = r.data("value");
                n(t(i), { pos: u, aValue: f, aType: "click" });
            }
            function i(t, i) {
                var r = t.closest(".games-list-container"),
                    u = $(".games-list-container").index(r) + 1,
                    f = r.data("sortfilter");
                n(i, { pos: u, aValue: f });
            }
            function e(n) {
                var t = n.hasClass("next") ? "PageRight" : "PageLeft";
                i(n, t);
            }
            function o(n) {
                i(n, "SeeAll");
            }
            return {
                SendMenuFocus: r,
                SendMenuOffFocus: u,
                SendMenuClick: f,
                SendPagerClick: e,
                SendSeeAllClick: o,
            };
        })()),
    $(function () {
        $("div#FiltersAndSort").on(
            "mousedown",
            ".input-group-btn",
            function (n) {
                if (n.which == 1)
                    if ($(this).hasClass("open")) {
                        var i = $(n.target),
                            t = i.parent();
                        t.prop("tagName") === "LI" &&
                            Roblox.GamesPageInteraction.SendMenuClick(
                                $(this),
                                t
                            );
                    } else Roblox.GamesPageInteraction.SendMenuFocus($(this));
            }
        );
        $("div#FiltersAndSort").on("blur", ".input-group-btn", function (n) {
            var t = $(n.relatedTarget),
                i = t.parent();
            !$(n.target).hasClass("input-dropdown-btn") ||
                (t.prop("tagName") === "A" &&
                    i.prop("tagName") === "LI" &&
                    typeof i.data("value") != "undefined") ||
                Roblox.GamesPageInteraction.SendMenuOffFocus($(this));
        });
        $("#GamesListsContainer").on("mousedown", "div.scroller", function (n) {
            n.which == 1 && Roblox.GamesPageInteraction.SendPagerClick($(this));
        });
        $("#GamesListsContainer").on(
            "mousedown",
            "div.see-all-button",
            function (n) {
                n.which == 1 &&
                    Roblox.GamesPageInteraction.SendSeeAllClick($(this));
            }
        );
    });
