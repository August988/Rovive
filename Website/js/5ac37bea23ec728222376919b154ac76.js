// bundle: page___6e021f3c51af3c125980e52cae9eee12_m
// files: history.js/jquery.history.js, utilities/robloxAds.js, Games/GamesPageAdsRefresh.js, VotingPanel.js, Games/GamesPage.js, Accounts/EmailEntryModal.js, Games/GameDetailReferral.js, Games/GamesPageInteraction.js, Games/SponsoredGames/SponsoredGames.js, utilities/popover.js, Navigation/ShopAmazon.js, GenericConfirmation.js, utilities/dialog.js

// history.js/jquery.history.js
typeof JSON != "object" && (JSON = {}),
    (function () {
        "use strict";
        function i(n) {
            return n < 10 ? "0" + n : n;
        }
        function f(n) {
            return (
                (o.lastIndex = 0),
                o.test(n)
                    ? '"' +
                      n.replace(o, function (n) {
                          var t = s[n];
                          return typeof t == "string"
                              ? t
                              : "\\u" +
                                    (
                                        "0000" + n.charCodeAt(0).toString(16)
                                    ).slice(-4);
                      }) +
                      '"'
                    : '"' + n + '"'
            );
        }
        function r(i, e) {
            var s,
                l,
                h,
                a,
                v = n,
                c,
                o = e[i];
            o &&
                typeof o == "object" &&
                typeof o.toJSON == "function" &&
                (o = o.toJSON(i)),
                typeof t == "function" && (o = t.call(e, i, o));
            switch (typeof o) {
                case "string":
                    return f(o);
                case "number":
                    return isFinite(o) ? String(o) : "null";
                case "boolean":
                case "null":
                    return String(o);
                case "object":
                    if (!o) return "null";
                    if (
                        ((n += u),
                        (c = []),
                        Object.prototype.toString.apply(o) === "[object Array]")
                    ) {
                        for (a = o.length, s = 0; s < a; s += 1)
                            c[s] = r(s, o) || "null";
                        return (
                            (h =
                                c.length === 0
                                    ? "[]"
                                    : n
                                    ? "[\n" +
                                      n +
                                      c.join(",\n" + n) +
                                      "\n" +
                                      v +
                                      "]"
                                    : "[" + c.join(",") + "]"),
                            (n = v),
                            h
                        );
                    }
                    if (t && typeof t == "object")
                        for (a = t.length, s = 0; s < a; s += 1)
                            typeof t[s] == "string" &&
                                ((l = t[s]),
                                (h = r(l, o)),
                                h && c.push(f(l) + (n ? ": " : ":") + h));
                    else
                        for (l in o)
                            Object.prototype.hasOwnProperty.call(o, l) &&
                                ((h = r(l, o)),
                                h && c.push(f(l) + (n ? ": " : ":") + h));
                    return (
                        (h =
                            c.length === 0
                                ? "{}"
                                : n
                                ? "{\n" + n + c.join(",\n" + n) + "\n" + v + "}"
                                : "{" + c.join(",") + "}"),
                        (n = v),
                        h
                    );
            }
        }
        typeof Date.prototype.toJSON != "function" &&
            ((Date.prototype.toJSON = function () {
                return isFinite(this.valueOf())
                    ? this.getUTCFullYear() +
                          "-" +
                          i(this.getUTCMonth() + 1) +
                          "-" +
                          i(this.getUTCDate()) +
                          "T" +
                          i(this.getUTCHours()) +
                          ":" +
                          i(this.getUTCMinutes()) +
                          ":" +
                          i(this.getUTCSeconds()) +
                          "Z"
                    : null;
            }),
            (String.prototype.toJSON =
                Number.prototype.toJSON =
                Boolean.prototype.toJSON =
                    function () {
                        return this.valueOf();
                    }));
        var e =
                /[\u0000\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,
            o =
                /[\\\"\x00-\x1f\x7f-\x9f\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,
            n,
            u,
            s = {
                "\b": "\\b",
                "\t": "\\t",
                "\n": "\\n",
                "\f": "\\f",
                "\r": "\\r",
                '"': '\\"',
                "\\": "\\\\",
            },
            t;
        typeof JSON.stringify != "function" &&
            (JSON.stringify = function (i, f, e) {
                var o;
                if (((n = ""), (u = ""), typeof e == "number"))
                    for (o = 0; o < e; o += 1) u += " ";
                else typeof e == "string" && (u = e);
                if (
                    ((t = f),
                    !f ||
                        typeof f == "function" ||
                        (typeof f == "object" && typeof f.length == "number"))
                )
                    return r("", { "": i });
                throw new Error("JSON.stringify");
            }),
            typeof JSON.parse != "function" &&
                (JSON.parse = function (n, t) {
                    function r(n, i) {
                        var f,
                            e,
                            u = n[i];
                        if (u && typeof u == "object")
                            for (f in u)
                                Object.prototype.hasOwnProperty.call(u, f) &&
                                    ((e = r(u, f)),
                                    e !== undefined ? (u[f] = e) : delete u[f]);
                        return t.call(n, i, u);
                    }
                    var i;
                    if (
                        ((n = String(n)),
                        (e.lastIndex = 0),
                        e.test(n) &&
                            (n = n.replace(e, function (n) {
                                return (
                                    "\\u" +
                                    (
                                        "0000" + n.charCodeAt(0).toString(16)
                                    ).slice(-4)
                                );
                            })),
                        /^[\],:{}\s]*$/.test(
                            n
                                .replace(
                                    /\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g,
                                    "@"
                                )
                                .replace(
                                    /"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,
                                    "]"
                                )
                                .replace(/(?:^|:|,)(?:\s*\[)+/g, "")
                        ))
                    )
                        return (
                            (i = eval("(" + n + ")")),
                            typeof t == "function" ? r({ "": i }, "") : i
                        );
                    throw new SyntaxError("JSON.parse");
                });
    })(),
    (function (n, t) {
        "use strict";
        var i = (n.History = n.History || {}),
            r = n.jQuery;
        if (typeof i.Adapter != "undefined")
            throw new Error("History.js Adapter has already been loaded...");
        (i.Adapter = {
            bind: function (n, t, i) {
                r(n).bind(t, i);
            },
            trigger: function (n, t, i) {
                r(n).trigger(t, i);
            },
            extractEventData: function (n, i, r) {
                return (
                    (i && i.originalEvent && i.originalEvent[n]) ||
                    (r && r[n]) ||
                    t
                );
            },
            onDomLoad: function (n) {
                r(n);
            },
        }),
            typeof i.init != "undefined" && i.init();
    })(window),
    (function (n) {
        "use strict";
        var r = n.document,
            f = n.setTimeout || f,
            e = n.clearTimeout || e,
            u = n.setInterval || u,
            i = (n.History = n.History || {});
        if (typeof i.initHtml4 != "undefined")
            throw new Error(
                "History.js HTML4 Support has already been loaded..."
            );
        (i.initHtml4 = function () {
            if (typeof i.initHtml4.initialized != "undefined") return !1;
            (i.initHtml4.initialized = !0),
                (i.enabled = !0),
                (i.savedHashes = []),
                (i.isLastHash = function (n) {
                    var r = i.getHashByIndex(),
                        t;
                    return (t = n === r), t;
                }),
                (i.isHashEqual = function (n, t) {
                    return (
                        (n = encodeURIComponent(n).replace(/%25/g, "%")),
                        (t = encodeURIComponent(t).replace(/%25/g, "%")),
                        n === t
                    );
                }),
                (i.saveHash = function (n) {
                    return i.isLastHash(n) ? !1 : (i.savedHashes.push(n), !0);
                }),
                (i.getHashByIndex = function (n) {
                    var t = null;
                    return (
                        (t =
                            typeof n == "undefined"
                                ? i.savedHashes[i.savedHashes.length - 1]
                                : n < 0
                                ? i.savedHashes[i.savedHashes.length + n]
                                : i.savedHashes[n]),
                        t
                    );
                }),
                (i.discardedHashes = {}),
                (i.discardedStates = {}),
                (i.discardState = function (n, t, r) {
                    var f = i.getHashByState(n),
                        u;
                    return (
                        (u = {
                            discardedState: n,
                            backState: r,
                            forwardState: t,
                        }),
                        (i.discardedStates[f] = u),
                        !0
                    );
                }),
                (i.discardHash = function (n, t, r) {
                    var u = { discardedHash: n, backState: r, forwardState: t };
                    return (i.discardedHashes[n] = u), !0;
                }),
                (i.discardedState = function (n) {
                    var r = i.getHashByState(n),
                        t;
                    return (t = i.discardedStates[r] || !1), t;
                }),
                (i.discardedHash = function (n) {
                    return i.discardedHashes[n] || !1;
                }),
                (i.recycleState = function (n) {
                    var t = i.getHashByState(n);
                    return (
                        i.discardedState(n) && delete i.discardedStates[t], !0
                    );
                }),
                i.emulated.hashChange &&
                    ((i.hashChangeInit = function () {
                        i.checkerFunction = null;
                        var f = "",
                            s,
                            t,
                            e,
                            o,
                            h = Boolean(i.getHash());
                        return (
                            i.isInternetExplorer()
                                ? ((s = "historyjs-iframe"),
                                  (t = r.createElement("iframe")),
                                  t.setAttribute("id", s),
                                  t.setAttribute("src", "#"),
                                  (t.style.display = "none"),
                                  r.body.appendChild(t),
                                  t.contentWindow.document.open(),
                                  t.contentWindow.document.close(),
                                  (e = ""),
                                  (o = !1),
                                  (i.checkerFunction = function () {
                                      if (o) return !1;
                                      o = !0;
                                      var u = i.getHash(),
                                          r = i.getHash(
                                              t.contentWindow.document
                                          );
                                      return (
                                          u !== f
                                              ? ((f = u),
                                                r !== u &&
                                                    ((e = r = u),
                                                    t.contentWindow.document.open(),
                                                    t.contentWindow.document.close(),
                                                    (t.contentWindow.document.location.hash =
                                                        i.escapeHash(u))),
                                                i.Adapter.trigger(
                                                    n,
                                                    "hashchange"
                                                ))
                                              : r !== e &&
                                                ((e = r),
                                                h && r === ""
                                                    ? i.back()
                                                    : i.setHash(r, !1)),
                                          (o = !1),
                                          !0
                                      );
                                  }))
                                : (i.checkerFunction = function () {
                                      var t = i.getHash() || "";
                                      return (
                                          t !== f &&
                                              ((f = t),
                                              i.Adapter.trigger(
                                                  n,
                                                  "hashchange"
                                              )),
                                          !0
                                      );
                                  }),
                            i.intervalList.push(
                                u(
                                    i.checkerFunction,
                                    i.options.hashChangeInterval
                                )
                            ),
                            !0
                        );
                    }),
                    i.Adapter.onDomLoad(i.hashChangeInit)),
                i.emulated.pushState &&
                    ((i.onHashChange = function (t) {
                        var e = (t && t.newURL) || i.getLocationHref(),
                            u = i.getHashByUrl(e),
                            r = null,
                            o = null,
                            s = null,
                            f;
                        return i.isLastHash(u)
                            ? (i.busy(!1), !1)
                            : (i.doubleCheckComplete(),
                              i.saveHash(u),
                              u && i.isTraditionalAnchor(u)
                                  ? (i.Adapter.trigger(n, "anchorchange"),
                                    i.busy(!1),
                                    !1)
                                  : ((r = i.extractState(
                                        i.getFullUrl(u || i.getLocationHref()),
                                        !0
                                    )),
                                    i.isLastSavedState(r)
                                        ? (i.busy(!1), !1)
                                        : ((o = i.getHashByState(r)),
                                          (f = i.discardedState(r)),
                                          f
                                              ? (i.getHashByIndex(-2) ===
                                                i.getHashByState(f.forwardState)
                                                    ? i.back(!1)
                                                    : i.forward(!1),
                                                !1)
                                              : (i.pushState(
                                                    r.data,
                                                    r.title,
                                                    encodeURI(r.url),
                                                    !1
                                                ),
                                                !0))));
                    }),
                    i.Adapter.bind(n, "hashchange", i.onHashChange),
                    (i.pushState = function (t, r, u, f) {
                        if (
                            ((u = encodeURI(u).replace(/%25/g, "%")),
                            i.getHashByUrl(u))
                        )
                            throw new Error(
                                "History.js does not support states with fragment-identifiers (hashes/anchors)."
                            );
                        if (f !== !1 && i.busy())
                            return (
                                i.pushQueue({
                                    scope: i,
                                    callback: i.pushState,
                                    args: arguments,
                                    queue: f,
                                }),
                                !1
                            );
                        i.busy(!0);
                        var e = i.createStateObject(t, r, u),
                            o = i.getHashByState(e),
                            s = i.getState(!1),
                            h = i.getHashByState(s),
                            c = i.getHash(),
                            l = i.expectedStateId == e.id;
                        return (
                            i.storeState(e),
                            (i.expectedStateId = e.id),
                            i.recycleState(e),
                            i.setTitle(e),
                            o === h
                                ? (i.busy(!1), !1)
                                : (i.saveState(e),
                                  l || i.Adapter.trigger(n, "statechange"),
                                  !i.isHashEqual(o, c) &&
                                      !i.isHashEqual(
                                          o,
                                          i.getShortUrl(i.getLocationHref())
                                      ) &&
                                      i.setHash(o, !1),
                                  i.busy(!1),
                                  !0)
                        );
                    }),
                    (i.replaceState = function (t, r, u, f) {
                        if (
                            ((u = encodeURI(u).replace(/%25/g, "%")),
                            i.getHashByUrl(u))
                        )
                            throw new Error(
                                "History.js does not support states with fragment-identifiers (hashes/anchors)."
                            );
                        if (f !== !1 && i.busy())
                            return (
                                i.pushQueue({
                                    scope: i,
                                    callback: i.replaceState,
                                    args: arguments,
                                    queue: f,
                                }),
                                !1
                            );
                        i.busy(!0);
                        var e = i.createStateObject(t, r, u),
                            s = i.getHashByState(e),
                            o = i.getState(!1),
                            h = i.getHashByState(o),
                            c = i.getStateByIndex(-2);
                        return (
                            i.discardState(o, e, c),
                            s === h
                                ? (i.storeState(e),
                                  (i.expectedStateId = e.id),
                                  i.recycleState(e),
                                  i.setTitle(e),
                                  i.saveState(e),
                                  i.Adapter.trigger(n, "statechange"),
                                  i.busy(!1))
                                : i.pushState(e.data, e.title, e.url, !1),
                            !0
                        );
                    })),
                i.emulated.pushState &&
                    i.getHash() &&
                    !i.emulated.hashChange &&
                    i.Adapter.onDomLoad(function () {
                        i.Adapter.trigger(n, "hashchange");
                    });
        }),
            typeof i.init != "undefined" && i.init();
    })(window),
    (function (n, t) {
        "use strict";
        var e = n.console || t,
            r = n.document,
            o = n.navigator,
            f = n.sessionStorage || !1,
            h = n.setTimeout,
            c = n.clearTimeout,
            l = n.setInterval,
            a = n.clearInterval,
            u = n.JSON,
            v = n.alert,
            i = (n.History = n.History || {}),
            s = n.history;
        try {
            f.setItem("TEST", "1"), f.removeItem("TEST");
        } catch (y) {
            f = !1;
        }
        if (
            ((u.stringify = u.stringify || u.encode),
            (u.parse = u.parse || u.decode),
            typeof i.init != "undefined")
        )
            throw new Error("History.js Core has already been loaded...");
        (i.init = function () {
            return typeof i.Adapter == "undefined"
                ? !1
                : (typeof i.initCore != "undefined" && i.initCore(),
                  typeof i.initHtml4 != "undefined" && i.initHtml4(),
                  !0);
        }),
            (i.initCore = function () {
                if (typeof i.initCore.initialized != "undefined") return !1;
                if (
                    ((i.initCore.initialized = !0),
                    (i.options = i.options || {}),
                    (i.options.hashChangeInterval =
                        i.options.hashChangeInterval || 100),
                    (i.options.safariPollInterval =
                        i.options.safariPollInterval || 500),
                    (i.options.doubleCheckInterval =
                        i.options.doubleCheckInterval || 500),
                    (i.options.disableSuid = i.options.disableSuid || !1),
                    (i.options.storeInterval = i.options.storeInterval || 1e3),
                    (i.options.busyDelay = i.options.busyDelay || 250),
                    (i.options.debug = i.options.debug || !1),
                    (i.options.initialTitle =
                        i.options.initialTitle || r.title),
                    (i.options.html4Mode = i.options.html4Mode || !1),
                    (i.options.delayInit = i.options.delayInit || !1),
                    (i.intervalList = []),
                    (i.clearAllIntervals = function () {
                        var n,
                            t = i.intervalList;
                        if (typeof t != "undefined" && t !== null) {
                            for (n = 0; n < t.length; n++) a(t[n]);
                            i.intervalList = null;
                        }
                    }),
                    (i.debug = function () {
                        (i.options.debug || !1) && i.log.apply(i, arguments);
                    }),
                    (i.log = function () {
                        var s =
                                typeof e != "undefined" &&
                                typeof e.log != "undefined" &&
                                typeof e.log.apply != "undefined",
                            t = r.getElementById("log"),
                            n,
                            f,
                            h,
                            o,
                            i;
                        for (
                            s
                                ? ((o = Array.prototype.slice.call(arguments)),
                                  (n = o.shift()),
                                  typeof e.debug != "undefined"
                                      ? e.debug.apply(e, [n, o])
                                      : e.log.apply(e, [n, o]))
                                : (n = "\n" + arguments[0] + "\n"),
                                f = 1,
                                h = arguments.length;
                            f < h;
                            ++f
                        ) {
                            if (
                                ((i = arguments[f]),
                                typeof i == "object" && typeof u != "undefined")
                            )
                                try {
                                    i = u.stringify(i);
                                } catch (c) {}
                            n += "\n" + i + "\n";
                        }
                        return (
                            t
                                ? ((t.value += n + "\n-----\n"),
                                  (t.scrollTop =
                                      t.scrollHeight - t.clientHeight))
                                : s || v(n),
                            !0
                        );
                    }),
                    (i.getInternetExplorerMajorVersion = function () {
                        return (i.getInternetExplorerMajorVersion.cached =
                            typeof i.getInternetExplorerMajorVersion.cached !=
                            "undefined"
                                ? i.getInternetExplorerMajorVersion.cached
                                : (function () {
                                      for (
                                          var n = 3,
                                              t = r.createElement("div"),
                                              i = t.getElementsByTagName("i");
                                          (t.innerHTML =
                                              "<!--[if gt IE " +
                                              ++n +
                                              "]><i></i><![endif]-->") && i[0];

                                      );
                                      return n > 4 ? n : !1;
                                  })());
                    }),
                    (i.isInternetExplorer = function () {
                        return (i.isInternetExplorer.cached =
                            typeof i.isInternetExplorer.cached != "undefined"
                                ? i.isInternetExplorer.cached
                                : Boolean(i.getInternetExplorerMajorVersion()));
                    }),
                    (i.emulated = i.options.html4Mode
                        ? { pushState: !0, hashChange: !0 }
                        : {
                              pushState: !Boolean(
                                  n.history &&
                                      n.history.pushState &&
                                      n.history.replaceState &&
                                      !/ Mobile\/([1-7][a-z]|(8([abcde]|f(1[0-8]))))/i.test(
                                          o.userAgent
                                      ) &&
                                      !/AppleWebKit\/5([0-2]|3[0-2])/i.test(
                                          o.userAgent
                                      )
                              ),
                              hashChange: Boolean(
                                  !(
                                      "onhashchange" in n || "onhashchange" in r
                                  ) ||
                                      (i.isInternetExplorer() &&
                                          i.getInternetExplorerMajorVersion() <
                                              8)
                              ),
                          }),
                    (i.enabled = !i.emulated.pushState),
                    (i.bugs = {
                        setHash: Boolean(
                            !i.emulated.pushState &&
                                o.vendor === "Apple Computer, Inc." &&
                                /AppleWebKit\/5([0-2]|3[0-3])/.test(o.userAgent)
                        ),
                        safariPoll: Boolean(
                            !i.emulated.pushState &&
                                o.vendor === "Apple Computer, Inc." &&
                                /AppleWebKit\/5([0-2]|3[0-3])/.test(o.userAgent)
                        ),
                        ieDoubleCheck: Boolean(
                            i.isInternetExplorer() &&
                                i.getInternetExplorerMajorVersion() < 8
                        ),
                        hashEscape: Boolean(
                            i.isInternetExplorer() &&
                                i.getInternetExplorerMajorVersion() < 7
                        ),
                    }),
                    (i.isEmptyObject = function (n) {
                        for (var t in n) if (n.hasOwnProperty(t)) return !1;
                        return !0;
                    }),
                    (i.cloneObject = function (n) {
                        var i, t;
                        return (
                            n
                                ? ((i = u.stringify(n)), (t = u.parse(i)))
                                : (t = {}),
                            t
                        );
                    }),
                    (i.getRootUrl = function () {
                        var n =
                            r.location.protocol +
                            "//" +
                            (r.location.hostname || r.location.host);
                        return (
                            (r.location.port || !1) &&
                                (n += ":" + r.location.port),
                            (n += "/"),
                            n
                        );
                    }),
                    (i.getBaseHref = function () {
                        var i = r.getElementsByTagName("base"),
                            t = null,
                            n = "";
                        return (
                            i.length === 1 &&
                                ((t = i[0]),
                                (n = t.href.replace(/[^\/]+$/, ""))),
                            (n = n.replace(/\/+$/, "")),
                            n && (n += "/"),
                            n
                        );
                    }),
                    (i.getBaseUrl = function () {
                        return (
                            i.getBaseHref() ||
                            i.getBasePageUrl() ||
                            i.getRootUrl()
                        );
                    }),
                    (i.getPageUrl = function () {
                        var r = i.getState(!1, !1),
                            t = (r || {}).url || i.getLocationHref(),
                            n;
                        return (
                            (n = t
                                .replace(/\/+$/, "")
                                .replace(/[^\/]+$/, function (n) {
                                    return /\./.test(n) ? n : n + "/";
                                })),
                            n
                        );
                    }),
                    (i.getBasePageUrl = function () {
                        return (
                            i
                                .getLocationHref()
                                .replace(/[#\?].*/, "")
                                .replace(/[^\/]+$/, function (n) {
                                    return /[^\/]$/.test(n) ? "" : n;
                                })
                                .replace(/\/+$/, "") + "/"
                        );
                    }),
                    (i.getFullUrl = function (n, t) {
                        var r = n,
                            u = n.substring(0, 1);
                        return (
                            (t = typeof t == "undefined" ? !0 : t),
                            /[a-z]+\:\/\//.test(n) ||
                                (r =
                                    u === "/"
                                        ? i.getRootUrl() + n.replace(/^\/+/, "")
                                        : u === "#"
                                        ? i.getPageUrl().replace(/#.*/, "") + n
                                        : u === "?"
                                        ? i
                                              .getPageUrl()
                                              .replace(/[\?#].*/, "") + n
                                        : t
                                        ? i.getBaseUrl() +
                                          n.replace(/^(\.\/)+/, "")
                                        : i.getBasePageUrl() +
                                          n.replace(/^(\.\/)+/, "")),
                            r.replace(/\#$/, "")
                        );
                    }),
                    (i.getShortUrl = function (n) {
                        var t = n,
                            r = i.getBaseUrl(),
                            u = i.getRootUrl();
                        return (
                            i.emulated.pushState && (t = t.replace(r, "")),
                            (t = t.replace(u, "/")),
                            i.isTraditionalAnchor(t) && (t = "./" + t),
                            (t = t
                                .replace(/^(\.\/)+/g, "./")
                                .replace(/\#$/, "")),
                            t
                        );
                    }),
                    (i.getLocationHref = function (n) {
                        return (
                            (n = n || r),
                            n.URL === n.location.href
                                ? n.location.href
                                : n.location.href === decodeURIComponent(n.URL)
                                ? n.URL
                                : n.location.hash &&
                                  decodeURIComponent(
                                      n.location.href.replace(/^[^#]+/, "")
                                  ) === n.location.hash
                                ? n.location.href
                                : n.URL.indexOf("#") == -1 &&
                                  n.location.href.indexOf("#") != -1
                                ? n.location.href
                                : n.URL || n.location.href
                        );
                    }),
                    (i.store = {}),
                    (i.idToState = i.idToState || {}),
                    (i.stateToId = i.stateToId || {}),
                    (i.urlToId = i.urlToId || {}),
                    (i.storedStates = i.storedStates || []),
                    (i.savedStates = i.savedStates || []),
                    (i.normalizeStore = function () {
                        (i.store.idToState = i.store.idToState || {}),
                            (i.store.urlToId = i.store.urlToId || {}),
                            (i.store.stateToId = i.store.stateToId || {});
                    }),
                    (i.getState = function (n, t) {
                        typeof n == "undefined" && (n = !0),
                            typeof t == "undefined" && (t = !0);
                        var r = i.getLastSavedState();
                        return (
                            !r && t && (r = i.createStateObject()),
                            n &&
                                ((r = i.cloneObject(r)),
                                (r.url = r.cleanUrl || r.url)),
                            r
                        );
                    }),
                    (i.getIdByState = function (n) {
                        var t = i.extractId(n.url),
                            r;
                        if (!t)
                            if (
                                ((r = i.getStateString(n)),
                                typeof i.stateToId[r] != "undefined")
                            )
                                t = i.stateToId[r];
                            else if (typeof i.store.stateToId[r] != "undefined")
                                t = i.store.stateToId[r];
                            else {
                                for (;;)
                                    if (
                                        ((t =
                                            +new Date() +
                                            String(Math.random()).replace(
                                                /\D/g,
                                                ""
                                            )),
                                        typeof i.idToState[t] == "undefined" &&
                                            typeof i.store.idToState[t] ==
                                                "undefined")
                                    )
                                        break;
                                (i.stateToId[r] = t), (i.idToState[t] = n);
                            }
                        return t;
                    }),
                    (i.normalizeState = function (n) {
                        var t, r;
                        return ((n && typeof n == "object") || (n = {}),
                        typeof n.normalized != "undefined")
                            ? n
                            : ((n.data && typeof n.data == "object") ||
                                  (n.data = {}),
                              (t = {}),
                              (t.normalized = !0),
                              (t.title = n.title || ""),
                              (t.url = i.getFullUrl(
                                  n.url ? n.url : i.getLocationHref()
                              )),
                              (t.hash = i.getShortUrl(t.url)),
                              (t.data = i.cloneObject(n.data)),
                              (t.id = i.getIdByState(t)),
                              (t.cleanUrl = t.url.replace(/\??\&_suid.*/, "")),
                              (t.url = t.cleanUrl),
                              (r = !i.isEmptyObject(t.data)),
                              (t.title || r) &&
                                  i.options.disableSuid !== !0 &&
                                  ((t.hash = i
                                      .getShortUrl(t.url)
                                      .replace(/\??\&_suid.*/, "")),
                                  /\?/.test(t.hash) || (t.hash += "?"),
                                  (t.hash += "&_suid=" + t.id)),
                              (t.hashedUrl = i.getFullUrl(t.hash)),
                              (i.emulated.pushState || i.bugs.safariPoll) &&
                                  i.hasUrlDuplicate(t) &&
                                  (t.url = t.hashedUrl),
                              t);
                    }),
                    (i.createStateObject = function (n, t, r) {
                        var u = { data: n, title: t, url: r };
                        return (u = i.normalizeState(u)), u;
                    }),
                    (i.getStateById = function (n) {
                        n = String(n);
                        return i.idToState[n] || i.store.idToState[n] || t;
                    }),
                    (i.getStateString = function (n) {
                        var t, r, f;
                        return (
                            (t = i.normalizeState(n)),
                            (r = { data: t.data, title: n.title, url: n.url }),
                            (f = u.stringify(r)),
                            f
                        );
                    }),
                    (i.getStateId = function (n) {
                        var t, r;
                        return (t = i.normalizeState(n)), (r = t.id), r;
                    }),
                    (i.getHashByState = function (n) {
                        var t, r;
                        return (t = i.normalizeState(n)), (r = t.hash), r;
                    }),
                    (i.extractId = function (n) {
                        var r, t, u, i;
                        return (
                            (i = n.indexOf("#") != -1 ? n.split("#")[0] : n),
                            (t = /(.*)\&_suid=([0-9]+)$/.exec(i)),
                            (u = t ? t[1] || n : n),
                            (r = t ? String(t[2] || "") : ""),
                            r || !1
                        );
                    }),
                    (i.isTraditionalAnchor = function (n) {
                        return !/[\/\?\.]/.test(n);
                    }),
                    (i.extractState = function (n, t) {
                        var r = null,
                            u,
                            f;
                        return (
                            (t = t || !1),
                            (u = i.extractId(n)),
                            u && (r = i.getStateById(u)),
                            r ||
                                ((f = i.getFullUrl(n)),
                                (u = i.getIdByUrl(f) || !1),
                                u && (r = i.getStateById(u)),
                                !r &&
                                    t &&
                                    !i.isTraditionalAnchor(n) &&
                                    (r = i.createStateObject(null, null, f))),
                            r
                        );
                    }),
                    (i.getIdByUrl = function (n) {
                        return i.urlToId[n] || i.store.urlToId[n] || t;
                    }),
                    (i.getLastSavedState = function () {
                        return i.savedStates[i.savedStates.length - 1] || t;
                    }),
                    (i.getLastStoredState = function () {
                        return i.storedStates[i.storedStates.length - 1] || t;
                    }),
                    (i.hasUrlDuplicate = function (n) {
                        var r = !1,
                            t;
                        return (
                            (t = i.extractState(n.url)),
                            (r = t && t.id !== n.id),
                            r
                        );
                    }),
                    (i.storeState = function (n) {
                        return (
                            (i.urlToId[n.url] = n.id),
                            i.storedStates.push(i.cloneObject(n)),
                            n
                        );
                    }),
                    (i.isLastSavedState = function (n) {
                        var t = !1,
                            r,
                            u,
                            f;
                        return (
                            i.savedStates.length &&
                                ((r = n.id),
                                (u = i.getLastSavedState()),
                                (f = u.id),
                                (t = r === f)),
                            t
                        );
                    }),
                    (i.saveState = function (n) {
                        return i.isLastSavedState(n)
                            ? !1
                            : (i.savedStates.push(i.cloneObject(n)), !0);
                    }),
                    (i.getStateByIndex = function (n) {
                        var t = null;
                        return (
                            (t =
                                typeof n == "undefined"
                                    ? i.savedStates[i.savedStates.length - 1]
                                    : n < 0
                                    ? i.savedStates[i.savedStates.length + n]
                                    : i.savedStates[n]),
                            t
                        );
                    }),
                    (i.getCurrentIndex = function () {
                        var n = null;
                        return (
                            (n =
                                i.savedStates.length < 1
                                    ? 0
                                    : i.savedStates.length - 1),
                            n
                        );
                    }),
                    (i.getHash = function (n) {
                        var r = i.getLocationHref(n),
                            t;
                        return (t = i.getHashByUrl(r)), t;
                    }),
                    (i.unescapeHash = function (n) {
                        var t = i.normalizeHash(n);
                        return (t = decodeURIComponent(t)), t;
                    }),
                    (i.normalizeHash = function (n) {
                        return n.replace(/[^#]*#/, "").replace(/#.*/, "");
                    }),
                    (i.setHash = function (n, t) {
                        var u, f;
                        return t !== !1 && i.busy()
                            ? (i.pushQueue({
                                  scope: i,
                                  callback: i.setHash,
                                  args: arguments,
                                  queue: t,
                              }),
                              !1)
                            : (i.busy(!0),
                              (u = i.extractState(n, !0)),
                              u && !i.emulated.pushState
                                  ? i.pushState(u.data, u.title, u.url, !1)
                                  : i.getHash() !== n &&
                                    (i.bugs.setHash
                                        ? ((f = i.getPageUrl()),
                                          i.pushState(
                                              null,
                                              null,
                                              f + "#" + n,
                                              !1
                                          ))
                                        : (r.location.hash = n)),
                              i);
                    }),
                    (i.escapeHash = function (t) {
                        var r = i.normalizeHash(t);
                        return (
                            (r = n.encodeURIComponent(r)),
                            i.bugs.hashEscape ||
                                (r = r
                                    .replace(/\%21/g, "!")
                                    .replace(/\%26/g, "&")
                                    .replace(/\%3D/g, "=")
                                    .replace(/\%3F/g, "?")),
                            r
                        );
                    }),
                    (i.getHashByUrl = function (n) {
                        var t = String(n).replace(
                            /([^#]*)#?([^#]*)#?(.*)/,
                            "$2"
                        );
                        return (t = i.unescapeHash(t)), t;
                    }),
                    (i.setTitle = function (n) {
                        var t = n.title,
                            u;
                        t ||
                            ((u = i.getStateByIndex(0)),
                            u &&
                                u.url === n.url &&
                                (t = u.title || i.options.initialTitle));
                        try {
                            r.getElementsByTagName("title")[0].innerHTML = t
                                .replace("<", "&lt;")
                                .replace(">", "&gt;")
                                .replace(" & ", " &amp; ");
                        } catch (f) {}
                        return (r.title = t), i;
                    }),
                    (i.queues = []),
                    (i.busy = function (n) {
                        if (
                            (typeof n != "undefined"
                                ? (i.busy.flag = n)
                                : typeof i.busy.flag == "undefined" &&
                                  (i.busy.flag = !1),
                            !i.busy.flag)
                        ) {
                            c(i.busy.timeout);
                            var t = function () {
                                var n, r, u;
                                if (!i.busy.flag)
                                    for (n = i.queues.length - 1; n >= 0; --n)
                                        ((r = i.queues[n]), r.length !== 0) &&
                                            ((u = r.shift()),
                                            i.fireQueueItem(u),
                                            (i.busy.timeout = h(
                                                t,
                                                i.options.busyDelay
                                            )));
                            };
                            i.busy.timeout = h(t, i.options.busyDelay);
                        }
                        return i.busy.flag;
                    }),
                    (i.busy.flag = !1),
                    (i.fireQueueItem = function (n) {
                        return n.callback.apply(n.scope || i, n.args || []);
                    }),
                    (i.pushQueue = function (n) {
                        return (
                            (i.queues[n.queue || 0] =
                                i.queues[n.queue || 0] || []),
                            i.queues[n.queue || 0].push(n),
                            i
                        );
                    }),
                    (i.queue = function (n, t) {
                        return (
                            typeof n == "function" && (n = { callback: n }),
                            typeof t != "undefined" && (n.queue = t),
                            i.busy() ? i.pushQueue(n) : i.fireQueueItem(n),
                            i
                        );
                    }),
                    (i.clearQueue = function () {
                        return (i.busy.flag = !1), (i.queues = []), i;
                    }),
                    (i.stateChanged = !1),
                    (i.doubleChecker = !1),
                    (i.doubleCheckComplete = function () {
                        return (i.stateChanged = !0), i.doubleCheckClear(), i;
                    }),
                    (i.doubleCheckClear = function () {
                        return (
                            i.doubleChecker &&
                                (c(i.doubleChecker), (i.doubleChecker = !1)),
                            i
                        );
                    }),
                    (i.doubleCheck = function (n) {
                        return (
                            (i.stateChanged = !1),
                            i.doubleCheckClear(),
                            i.bugs.ieDoubleCheck &&
                                (i.doubleChecker = h(function () {
                                    return (
                                        i.doubleCheckClear(),
                                        i.stateChanged || n(),
                                        !0
                                    );
                                }, i.options.doubleCheckInterval)),
                            i
                        );
                    }),
                    (i.safariStatePoll = function () {
                        var r = i.extractState(i.getLocationHref()),
                            t;
                        if (!i.isLastSavedState(r))
                            return (
                                (t = r),
                                t || (t = i.createStateObject()),
                                i.Adapter.trigger(n, "popstate"),
                                i
                            );
                    }),
                    (i.back = function (n) {
                        return n !== !1 && i.busy()
                            ? (i.pushQueue({
                                  scope: i,
                                  callback: i.back,
                                  args: arguments,
                                  queue: n,
                              }),
                              !1)
                            : (i.busy(!0),
                              i.doubleCheck(function () {
                                  i.back(!1);
                              }),
                              s.go(-1),
                              !0);
                    }),
                    (i.forward = function (n) {
                        return n !== !1 && i.busy()
                            ? (i.pushQueue({
                                  scope: i,
                                  callback: i.forward,
                                  args: arguments,
                                  queue: n,
                              }),
                              !1)
                            : (i.busy(!0),
                              i.doubleCheck(function () {
                                  i.forward(!1);
                              }),
                              s.go(1),
                              !0);
                    }),
                    (i.go = function (n, t) {
                        var r;
                        if (n > 0) for (r = 1; r <= n; ++r) i.forward(t);
                        else {
                            if (!(n < 0))
                                throw new Error(
                                    "History.go: History.go requires a positive or negative integer passed."
                                );
                            for (r = -1; r >= n; --r) i.back(t);
                        }
                        return i;
                    }),
                    i.emulated.pushState)
                ) {
                    var p = function () {};
                    (i.pushState = i.pushState || p),
                        (i.replaceState = i.replaceState || p);
                } else
                    (i.onPopState = function (t, r) {
                        var e = !1,
                            u = !1,
                            o,
                            f;
                        return (
                            i.doubleCheckComplete(),
                            (o = i.getHash()),
                            o
                                ? ((f = i.extractState(
                                      o || i.getLocationHref(),
                                      !0
                                  )),
                                  f
                                      ? i.replaceState(
                                            f.data,
                                            f.title,
                                            f.url,
                                            !1
                                        )
                                      : (i.Adapter.trigger(n, "anchorchange"),
                                        i.busy(!1)),
                                  (i.expectedStateId = !1),
                                  !1)
                                : ((e =
                                      i.Adapter.extractEventData(
                                          "state",
                                          t,
                                          r
                                      ) || !1),
                                  (u = e
                                      ? i.getStateById(e)
                                      : i.expectedStateId
                                      ? i.getStateById(i.expectedStateId)
                                      : i.extractState(i.getLocationHref())),
                                  u ||
                                      (u = i.createStateObject(
                                          null,
                                          null,
                                          i.getLocationHref()
                                      )),
                                  (i.expectedStateId = !1),
                                  i.isLastSavedState(u)
                                      ? (i.busy(!1), !1)
                                      : (i.storeState(u),
                                        i.saveState(u),
                                        i.setTitle(u),
                                        i.Adapter.trigger(n, "statechange"),
                                        i.busy(!1),
                                        !0))
                        );
                    }),
                        i.Adapter.bind(n, "popstate", i.onPopState),
                        (i.pushState = function (t, r, u, f) {
                            if (i.getHashByUrl(u) && i.emulated.pushState)
                                throw new Error(
                                    "History.js does not support states with fragement-identifiers (hashes/anchors)."
                                );
                            if (f !== !1 && i.busy())
                                return (
                                    i.pushQueue({
                                        scope: i,
                                        callback: i.pushState,
                                        args: arguments,
                                        queue: f,
                                    }),
                                    !1
                                );
                            i.busy(!0);
                            var e = i.createStateObject(t, r, u);
                            return (
                                i.isLastSavedState(e)
                                    ? i.busy(!1)
                                    : (i.storeState(e),
                                      (i.expectedStateId = e.id),
                                      s.pushState(e.id, e.title, e.url),
                                      i.Adapter.trigger(n, "popstate")),
                                !0
                            );
                        }),
                        (i.replaceState = function (t, r, u, f) {
                            if (i.getHashByUrl(u) && i.emulated.pushState)
                                throw new Error(
                                    "History.js does not support states with fragement-identifiers (hashes/anchors)."
                                );
                            if (f !== !1 && i.busy())
                                return (
                                    i.pushQueue({
                                        scope: i,
                                        callback: i.replaceState,
                                        args: arguments,
                                        queue: f,
                                    }),
                                    !1
                                );
                            i.busy(!0);
                            var e = i.createStateObject(t, r, u);
                            return (
                                i.isLastSavedState(e)
                                    ? i.busy(!1)
                                    : (i.storeState(e),
                                      (i.expectedStateId = e.id),
                                      s.replaceState(e.id, e.title, e.url),
                                      i.Adapter.trigger(n, "popstate")),
                                !0
                            );
                        });
                if (f) {
                    try {
                        i.store = u.parse(f.getItem("History.store")) || {};
                    } catch (w) {
                        i.store = {};
                    }
                    i.normalizeStore();
                } else (i.store = {}), i.normalizeStore();
                i.Adapter.bind(n, "unload", i.clearAllIntervals),
                    i.saveState(
                        i.storeState(i.extractState(i.getLocationHref(), !0))
                    ),
                    f &&
                        ((i.onUnload = function () {
                            var n, t, r;
                            try {
                                n = u.parse(f.getItem("History.store")) || {};
                            } catch (e) {
                                n = {};
                            }
                            (n.idToState = n.idToState || {}),
                                (n.urlToId = n.urlToId || {}),
                                (n.stateToId = n.stateToId || {});
                            for (t in i.idToState)
                                i.idToState.hasOwnProperty(t) &&
                                    (n.idToState[t] = i.idToState[t]);
                            for (t in i.urlToId)
                                i.urlToId.hasOwnProperty(t) &&
                                    (n.urlToId[t] = i.urlToId[t]);
                            for (t in i.stateToId)
                                i.stateToId.hasOwnProperty(t) &&
                                    (n.stateToId[t] = i.stateToId[t]);
                            (i.store = n),
                                i.normalizeStore(),
                                (r = u.stringify(n));
                            try {
                                f.setItem("History.store", r);
                            } catch (o) {
                                if (o.code !== DOMException.QUOTA_EXCEEDED_ERR)
                                    throw o;
                                f.length &&
                                    (f.removeItem("History.store"),
                                    f.setItem("History.store", r));
                            }
                        }),
                        i.intervalList.push(
                            l(i.onUnload, i.options.storeInterval)
                        ),
                        i.Adapter.bind(n, "beforeunload", i.onUnload),
                        i.Adapter.bind(n, "unload", i.onUnload)),
                    i.emulated.pushState ||
                        (i.bugs.safariPoll &&
                            i.intervalList.push(
                                l(
                                    i.safariStatePoll,
                                    i.options.safariPollInterval
                                )
                            ),
                        (o.vendor === "Apple Computer, Inc." ||
                            (o.appCodeName || "") === "Mozilla") &&
                            (i.Adapter.bind(n, "hashchange", function () {
                                i.Adapter.trigger(n, "popstate");
                            }),
                            i.getHash() &&
                                i.Adapter.onDomLoad(function () {
                                    i.Adapter.trigger(n, "hashchange");
                                })));
            }),
            (!i.options || !i.options.delayInit) && i.init();
    })(window); // utilities/robloxAds.js

("use strict");
var Roblox = Roblox || {};
(Roblox.AdsHelper = Roblox.AdsHelper || {}),
    (Roblox.AdsLibrary = {}),
    (Roblox.AdsLibrary.adsIdList = [
        "Skyscraper-Adp-Left",
        "Skyscraper-Adp-Right",
        "Leaderboard-Abp",
        "GamePageAdDiv1",
        "GamePageAdDiv2",
        "GamePageAdDiv3",
        "ProfilePageAdDiv1",
        "ProfilePageAdDiv2",
    ]),
    (Roblox.AdsLibrary.adsParameters = {
        "Skyscraper-Adp-Left": {
            element: $("#Skyscraper-Adp-Left"),
            template: null,
            fitTwoAds: !0,
            fitOneAd: !1,
            isSkyscraper: !0,
        },
        "Skyscraper-Adp-Right": {
            element: $("#Skyscraper-Adp-Right"),
            tempalte: null,
            fitTwoAds: !0,
            fitOneAd: !0,
            isSkyscraper: !0,
        },
        "Leaderboard-Abp": {
            element: $("#Leaderboard-Abp"),
            tempalte: null,
            fitTwoAds: !0,
            fitOneAd: !0,
            isLeaderboard: !0,
        },
        GamePageAdDiv1: {
            element: $("#GamePageAdDiv1"),
            template: null,
            isPageAd: !0,
        },
        GamePageAdDiv2: {
            element: $("#GamePageAdDiv2"),
            template: null,
            isPageAd: !0,
        },
        GamePageAdDiv3: {
            element: $("#GamePageAdDiv3"),
            template: null,
            isPageAd: !0,
        },
        ProfilePageAdDiv1: {
            element: $("#ProfilePageAdDiv1"),
            template: null,
            isPageAd: !0,
        },
        ProfilePageAdDiv2: {
            element: $("#ProfilePageAdDiv2"),
            template: null,
            isPageAd: !0,
        },
    }),
    (Roblox.AdsHelper.AdRefresher = (function () {
        function c(n) {
            return !n || !$.trim($(n).html());
        }
        function h(n) {
            t.push(n);
        }
        function s() {
            return googletag.pubadsReady;
        }
        function r(n) {
            var u, f, e, i;
            typeof n == "undefined" && (n = v), (u = !1);
            for (f in t) {
                if (
                    ((e = "#" + t[f] + " [data-js-adtype]"),
                    (i = $(e)),
                    typeof i == "undefined")
                )
                    return;
                if (i.attr("data-js-adtype") === "iframead") o(i);
                else if (i.attr("data-js-adtype") === "gptAd")
                    if (s()) u = !0;
                    else if (n > 0) {
                        setTimeout(function () {
                            r(--n);
                        }, y);
                        break;
                    }
            }
            u &&
                googletag.cmd.push(function () {
                    googletag.pubads().refresh();
                });
        }
        function o(n) {
            var i = n.attr("src"),
                r,
                u,
                t;
            typeof i == "string" &&
                ((r = i.indexOf("?") < 0 ? "?" : "&"),
                (u =
                    i +
                    r +
                    "nocache=" +
                    new Date().getMilliseconds().toString()),
                typeof n[0] != "undefined") &&
                ((t = n[0].contentDocument),
                t === undefined && (t = n[0].contentWindow),
                t.location.href !== "about:blank" && t.location.replace(u));
        }
        function n(n, t, i) {
            i.length && c(i) && (i.append(n), r());
        }
        function b() {
            for (
                var u = $(window).width(), f, r, t, i = 0;
                i < Roblox.AdsLibrary.adsIdList.length;
                i++
            )
                (r = Roblox.AdsLibrary.adsIdList[i]),
                    (t = Roblox.AdsLibrary.adsParameters[r]),
                    t &&
                        !t.template &&
                        ((f = t.element), (t.template = f.html()));
            for (i = 0; i < Roblox.AdsLibrary.adsIdList.length; i++)
                ((r = Roblox.AdsLibrary.adsIdList[i]),
                (t = Roblox.AdsLibrary.adsParameters[r]),
                t) &&
                    (t.isSkyscraper
                        ? u >= e && t.fitTwoAds
                            ? n(t.template, r, t.element)
                            : u < e && u >= l
                            ? t.fitOneAd
                                ? n(t.template, r, t.element)
                                : t.element.empty()
                            : t.element.empty()
                        : t.isLeaderboard
                        ? u < p
                            ? t.element.empty()
                            : n(t.template, r, t.element)
                        : t.isPageAd &&
                          (u < w
                              ? t.element.empty()
                              : n(t.template, r, t.element)));
        }
        var t = [],
            i = 20,
            u = 970,
            f = 160,
            p = 728,
            y = 100,
            v = 16,
            e =
                $("[data-max-width-for-two-ads]").attr(
                    "data-max-width-for-two-ads"
                ) || u + f * 2 + 48 - i,
            l =
                $("[data-max-width-for-one-ads]").attr(
                    "data-max-width-for-one-ads"
                ) || u + f + 24 - i,
            a = 1024,
            w = a - i;
        return {
            registerAd: h,
            refreshAds: r,
            adjustAdsFitScreen: b,
            getAds: n,
        };
    })()),
    (Roblox.AdsHelper.DynamicAdCreator = (function () {
        function n() {
            var n = $(".dynamic-ad").filter(".unpopulated");
            n.each(function (n, t) {
                var i = $(t),
                    u = i.attr("data-ad-slot"),
                    f = parseInt(i.attr("data-ad-width")),
                    e = parseInt(i.attr("data-ad-height")),
                    r = i.children(".ad-slot").attr("id");
                googletag.cmd.push(function () {
                    var n = googletag
                        .defineSlot(u, [f, e], r)
                        .addService(googletag.pubads());
                    googletag.display(r), googletag.pubads().refresh([n]);
                }),
                    i.removeClass("unpopulated");
            });
        }
        return { populateNewAds: n };
    })()),
    $(function () {
        $(window).resize(function () {
            Roblox.AdsHelper.AdRefresher.adjustAdsFitScreen();
        });
    }); // Games/GamesPageAdsRefresh.js

var Roblox = Roblox || {};
(Roblox.AdsHelper = Roblox.AdsHelper || {}),
    (Roblox.AdsHelper.AdRefresher = Roblox.AdsHelper.AdRefresher || {}),
    (Roblox.AdsHelper.DynamicAdCreator =
        Roblox.AdsHelper.DynamicAdCreator || {}),
    (Roblox.AdsHelper.GamesPage = (function () {
        function n() {
            Roblox.GamesPageContainerBehavior &&
                Roblox.GamesPageContainerBehavior.areAdsInSearchResults() &&
                !Roblox.GamesPageContainerBehavior.isInHorizontalScrollMode() &&
                Roblox.AdsHelper.DynamicAdCreator.populateNewAds();
        }
        function t() {
            Roblox.GamesPageContainerBehavior &&
                Roblox.GamesPageContainerBehavior.areAdsInSearchResults() &&
                !Roblox.GamesPageContainerBehavior.isInHorizontalScrollMode() &&
                ($(".overflow-visible .in-game-search-ad").each(function () {
                    var i = $(this);
                    i.children(".ad-slot").length > 0 &&
                        i.children(".ad-slot").html().trim() == "" &&
                        !i.hasClass("unpopulated") &&
                        (i.addClass("unpopulated").css("display", ""),
                        i
                            .children(".ad-slot")
                            .attr(
                                "id",
                                "adx" + Math.floor(Math.random() * 1e8)
                            ));
                }),
                n());
        }
        function i() {
            if (Roblox.GamesPageContainerBehavior.isCreateNewAd)
                (Roblox.GamesPageContainerBehavior.isCreateNewAd = !1),
                    Roblox.GamesPageContainerBehavior.setIntervalId &&
                        clearInterval(
                            Roblox.GamesPageContainerBehavior.setIntervalId
                        ),
                    (Roblox.GamesPageContainerBehavior.setIntervalId =
                        setInterval(function () {
                            Roblox.GamesPageContainerBehavior.isCreateNewAd =
                                !0;
                        }, Roblox
                            .GamesPageContainerBehavior.adRefreshRateMilliSeconds)),
                    Roblox.AdsHelper.AdRefresher.refreshAds(),
                    t();
            else return !0;
        }
        function r() {
            var n =
                Roblox.GamesPageContainerBehavior &&
                Roblox.GamesPageContainerBehavior.areAdsInSearchResults() &&
                !Roblox.GamesPageContainerBehavior.isInHorizontalScrollMode();
            n
                ? $("#ResponsiveWrapper").addClass("ads-in-game-search")
                : $("#ResponsiveWrapper").removeClass("ads-in-game-search");
        }
        return (
            $(function () {
                Roblox.GamesPageContainerBehavior &&
                    Roblox.GamesPageContainerBehavior.areAdsInSearchResults() &&
                    googletag &&
                    (googletag.pubads && googletag.pubads()
                        ? googletag.pubads().disableInitialLoad()
                        : googletag.cmd.push(function () {
                              googletag.pubads().disableInitialLoad();
                          }));
            }),
            {
                populateNewAds: n,
                refreshAds: i,
                checkAdDisplayState: r,
                refreshOldAds: t,
            }
        );
    })()); // VotingPanel.js

var Roblox = Roblox || {};
Roblox.Voting = (function () {
    var f = function () {
            $(".users-vote .upvote")
                .unbind()
                .click(function () {
                    i($(this), !0);
                }),
                $(".users-vote .downvote")
                    .unbind()
                    .click(function () {
                        i($(this), !1);
                    });
            var t = parseInt($(".voting-panel").data("total-up-votes")),
                r = parseInt($(".voting-panel").data("total-down-votes"));
            n(t, r);
        },
        i = function (n, i) {
            var f = $(".voting-panel").attr("data-user-authenticated"),
                r;
            if (f.toLowerCase() == "false") {
                u("GuestUser");
                return;
            }
            (r = $(".voting-panel").data("asset-id")),
                n.hasClass("selected") ||
                n.find("i").hasClass("selected") ||
                n.find(".icon-like, .icon-dislike").hasClass("selected")
                    ? t(r, null)
                    : t(r, i);
        },
        t = function (n, t) {
            $(".voting-panel .loading").show(),
                $.ajax({
                    type: "POST",
                    url: "/voting/vote?assetId=" + n + "&vote=" + t,
                    success: e,
                    error: o,
                });
        },
        e = function (t) {
            var o = $(".icon-like").length;
            if (($(".voting-panel .loading").hide(), t.Success)) {
                r(t.Model.UpVotes, t.Model.DownVotes);
                var i = $(".voting-panel .upvote"),
                    f = $(".voting-panel .downvote"),
                    e = $(".users-vote");
                o &&
                    ((i = $(".voting-panel .upvote .icon-like")),
                    (f = $(".voting-panel .downvote .icon-dislike"))),
                    t.Model.UserVote !== null
                        ? e.hasClass("has-voted") || e.addClass("has-voted")
                        : e.removeClass("has-voted"),
                    i.hasClass("selected") && i.removeClass("selected"),
                    f.hasClass("selected") && f.removeClass("selected"),
                    t.Model.UserVote !== null &&
                        (t.Model.UserVote
                            ? i.addClass("selected")
                            : f.addClass("selected")),
                    n(t.Model.UpVotes, t.Model.DownVotes);
            } else u(t.ModalType);
        },
        o = function () {
            $(".voting-panel .loading").hide();
        },
        n = function (n, t, i) {
            var e = i || $("#voting-section"),
                r,
                u,
                f;
            isNaN(n) ||
                isNaN(t) ||
                ((r =
                    n === 0
                        ? 0
                        : t === 0
                        ? 100
                        : Math.floor((n / (n + t)) * 100)),
                r > 100 && (r = 100),
                (u = e.find(".vote-container")),
                (f = u.find(".vote-background")),
                u.find(".vote-percentage").css("width", r + "%"),
                t > 0 ? f.addClass("has-votes") : f.removeClass("has-votes"));
        },
        r = function (t, i) {
            (t = Roblox.NumberFormatting.abbreviatedFormat(t)),
                (i = Roblox.NumberFormatting.abbreviatedFormat(i)),
                $(".voting-panel .total-upvotes-text").text(t),
                $(".voting-panel .total-downvotes-text").text(i),
                $(".voting-panel #vote-up-text").text(t),
                $(".voting-panel #vote-down-text").text(i),
                n(t, i);
        },
        s = function (n) {
            var t = {
                EmailIsVerified: {
                    titleText: Roblox.Voting.Resources.emailVerifiedTitle,
                    bodyContent: Roblox.Voting.Resources.emailVerifiedMessage,
                    onAccept: function () {
                        window.location.href =
                            Roblox && Roblox.Endpoints
                                ? Roblox.Endpoints.getAbsoluteUrl(
                                      "/my/account?confirmemail=1"
                                  )
                                : "/my/account?confirmemail=1";
                    },
                    acceptColor: Roblox.Dialog.green,
                    acceptText: Roblox.Voting.Resources.accept,
                    declineText: Roblox.Voting.Resources.decline,
                    allowHtmlContentInBody: !0,
                },
                PlayGame: {
                    titleText: Roblox.Voting.Resources.playGameTitle,
                    bodyContent: Roblox.Voting.Resources.playGameMessage,
                    acceptColor: Roblox.Dialog.green,
                    acceptText: "OK",
                    declineText: "",
                    declineColor: Roblox.Dialog.none,
                },
                UseModel: {
                    titleText: Roblox.Voting.Resources.useModelTitle,
                    bodyContent: Roblox.Voting.Resources.useModelMessage,
                    acceptColor: Roblox.Dialog.green,
                },
                InstallPlugin: {
                    titleText: Roblox.Voting.Resources.installPluginTitle,
                    bodyContent: Roblox.Voting.Resources.installPluginMessage,
                    acceptColor: Roblox.Dialog.green,
                },
                BuyGamePass: {
                    titleText: Roblox.Voting.Resources.buyGamePassTitle,
                    bodyContent: Roblox.Voting.Resources.buyGamePassMessage,
                    acceptColor: Roblox.Dialog.green,
                },
                FloodCheckThresholdMet: {
                    titleText:
                        Roblox.Voting.Resources.floodCheckThresholdMetTitle,
                    bodyContent:
                        Roblox.Voting.Resources.floodCheckThresholdMetMessage,
                    acceptColor: Roblox.Dialog.green,
                },
                GuestUser: {
                    titleText: Roblox.Voting.Resources.guestUserTitle,
                    bodyContent: Roblox.Voting.Resources.guestUserMessage,
                    onAccept: function () {
                        window.location.href =
                            Roblox && Roblox.Endpoints
                                ? Roblox.Endpoints.getAbsoluteUrl(
                                      Roblox.Voting.Resources.returnUrl
                                  )
                                : Roblox.Voting.Resources.returnUrl;
                    },
                    acceptColor: Roblox.Dialog.green,
                    acceptText: Roblox.Voting.Resources.login,
                    declineText: Roblox.Voting.Resources.decline,
                    allowHtmlContentInBody: !0,
                },
                AccountAgeOverOneDay: {
                    titleText: Roblox.Voting.Resources.unknownProblemTitle,
                    bodyContent: Roblox.Voting.Resources.unknownProblemMessage,
                    acceptColor: Roblox.Dialog.green,
                },
            };
            return t[n];
        },
        u = function (n) {
            n && Roblox.Dialog.open(s(n));
        };
    return { Vote: t, Initialize: f, SetVotes: r, UpdateVoteBar: n };
})(); // Games/GamesPage.js

var Roblox = Roblox || {};
typeof Roblox.GamesDisplayShared == "undefined" &&
    (Roblox.GamesDisplayShared = {}),
    (Roblox.GamesDisplayShared.searchOnPage = function (n) {
        var t = $("#SearchResultsContainer"),
            i,
            r;
        return t.hasClass("can-search")
            ? ((i = Math.min(
                  n,
                  Roblox.GamesPageContainerBehavior.numGamesToFetchOnSearch
              )),
              (r = 0),
              Roblox.GamesDisplayShared.getPage(r, i, t),
              !1)
            : !1;
    }),
    (Roblox.GamesDisplayShared.moreSearchResults = function () {
        var i = $("#SearchResultsContainer");
        if (i.hasClass("search-pending")) return !1;
        var n = Roblox.GamesPageContainerBehavior.numGamesToFetchOnSearch,
            r = n,
            t = $("#SearchResultsContainer").data("startrows");
        t && t > n && (r = t), Roblox.GamesDisplayShared.getPage(r, n, i);
    }),
    (Roblox.GamesDisplayShared.getPage = function (n, t, i) {
        var f = $("#GamesPageSearch").attr("data-keyword"),
            o = Roblox.GamesPageContainerBehavior.getURLBasedOnSortFilter(0),
            s =
                "<strong>" +
                Roblox.SearchBox.Resources.zeroResults +
                "</strong>",
            r = i.find(".games-list .game-cards"),
            u = n < 1,
            e;
        return (
            u
                ? (r.empty().append("<div class='abp-spacer'></div>"),
                  $("#GamesPageLeftColumn").hasClass("page-no-ads") &&
                      r.find(".abp-spacer").hide(),
                  $("#SearchResultsContainer .search-query-text").text(f),
                  Roblox.GamesDisplayShared.toggleSearch("on"),
                  Roblox.GamesPageContainerBehavior.setAdSpanFromHeight(
                      Roblox.GamesPageContainerBehavior.initialAdHeight
                  ))
                : Roblox.GamesPageContainerBehavior.setAdSpanFromHeight(
                      Roblox.GamesPageContainerBehavior.subsequentAdHeight
                  ),
            i.addClass("search-pending"),
            (e = {
                StartRows: n,
                MaxRows: t,
                IsUserLoggedIn:
                    Roblox.GamesPageContainerBehavior.IsUserLoggedIn,
                NumberOfColumns:
                    Roblox.GamesPageContainerBehavior.getNumberOfColumns(),
                IsInHorizontalScrollMode:
                    Roblox.GamesPageContainerBehavior.isInHorizontalScrollMode(),
                DeviceTypeId:
                    Roblox.GamesPageContainerBehavior.getDeviceTypeId(),
                Keyword: f,
                adSpan: Roblox.GamesPageContainerBehavior.getAdSpan(),
                adAlignment:
                    Roblox.GamesPageContainerBehavior.calcAdAlignment(),
                v: 2,
            }),
            $.get(o, e, function (f) {
                var e = $("<div></div>"),
                    o,
                    h;
                f.search("game-card-container") > 0
                    ? (e.append(f),
                      $("#SearchResultsContainer").data("startrows", n + t))
                    : u && e.append(s),
                    r.append(e.children()),
                    Roblox.SponsoredGames.getSponsoredGames(r),
                    Roblox.AdsHelper.GamesPage.checkAdDisplayState(),
                    i.removeClass("search-pending"),
                    u && Roblox.GamesPageContainerBehavior.refreshAds(),
                    Roblox.GamesPageContainerBehavior.isInHorizontalScrollMode() ||
                        Roblox.AdsHelper.GamesPage.populateNewAds(),
                    u &&
                        ((o =
                            Roblox.GamesPageContainerBehavior.getNumberOfColumns()),
                        (h =
                            Roblox.GamesPageContainerBehavior.getNumberOfRows()),
                        !Roblox.GamesPageContainerBehavior.getMultipleGamesListsDisplayedState() &&
                            o * h >
                                Roblox.GamesPageContainerBehavior
                                    .NumberOfGamesToFetchInVScrollMode &&
                            Roblox.GamesDisplayShared.moreSearchResults()),
                    Roblox.GamesDisplayShared.updateVotes(),
                    Roblox.GamesDisplayShared.fetchThumbnails();
            }),
            !1
        );
    }),
    (Roblox.GamesDisplayShared.updateURLFromSearchState = function () {
        var n = $("#GamesPageSearch").attr("data-keyword"),
            t = { keyword: n },
            i = Roblox.GamesPageContainerBehavior.Resources.pageTitle,
            r = "?Keyword=" + encodeURIComponent(n);
        History.pushState(t, i, r);
    }),
    (Roblox.GamesDisplayShared.toggleSearch = function (n) {
        var t = $("#GamesPageLeftColumn"),
            i = $("#SearchResultsContainer");
        switch (n) {
            case "on":
                t.attr("data-searchstate", "on"),
                    $("#SortFilter").addClass("hidden"),
                    $("#TimeFilter").addClass("hidden"),
                    $("#GenreFilter").addClass("hidden"),
                    $("#GamesListsContainer .games-list-container").each(
                        function () {
                            $(this).addClass("hidden");
                        }
                    ),
                    $("#SearchResultsContainer")
                        .removeClass("hidden")
                        .removeClass("overflow-hidden")
                        .addClass("overflow-visible")
                        .css("height", "762px"),
                    $("#FiltersAndSort").addClass("disabled"),
                    Roblox.GamesPageContainerBehavior.setMultipleGamesListsDisplayedState(
                        !1
                    ),
                    Roblox.GamesDisplayShared.updateURLFromSearchState();
                break;
            case "off":
                Roblox.GamesPageContainerBehavior.handleGamesFilterResetClick();
            case "reset":
                t.attr("data-searchstate", "off"),
                    $("#SortFilter").removeClass("hidden"),
                    $("#TimeFilter").removeClass("hidden"),
                    $("#GenreFilter").removeClass("hidden"),
                    $("#FiltersAndSort").removeClass("disabled"),
                    $("#SearchResultsContainer .search-query-text").text(""),
                    i.removeClass("search-pending"),
                    Roblox.AdsHelper.GamesPage.checkAdDisplayState();
        }
    }),
    (Roblox.GamesDisplayShared.initVotes = function () {
        var n = $(".container-main");
        if (n && !Roblox.DeviceFeatureDetection.isTouch)
            n.on(
                {
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
                },
                ".game-cards .game-card"
            );
    }),
    (Roblox.GamesDisplayShared.updateVotes = function () {
        var n = $("[data-voting-processed=false]");
        n.each(function (n, t) {
            var i = $(t),
                r = i.find(".vote-container"),
                u = parseInt(r.attr("data-upvotes")),
                f = parseInt(r.attr("data-downvotes"));
            Roblox.Voting.UpdateVoteBar(u, f, i),
                i.attr("data-voting-processed", !0);
        });
    }),
    (Roblox.GamesDisplayShared.fetchThumbnails = function () {
        $("[data-retry-url]").loadRobloxThumbnails();
    }),
    $(function () {
        $("#GamesPageSearch").attr(
            "data-keyword",
            Roblox.SearchBox.Resources.search
        ),
            Roblox.GamesDisplayShared.initVotes();
    }),
    (Roblox.GamesPageContainerBehavior = (function () {
        function yf() {
            var t, i, r, u, f, e;
            $(".games-list-container").each(function () {
                (t = $(this).attr("id")),
                    (i = $(this).data("sortfilter")),
                    (r = $(this).data("gamefilter")),
                    (u = $(this).data("minbclevel")),
                    (e = $(this).data("personalized-universe-id")),
                    (f = new Roblox.GamesListBehavior.GamesListObject(
                        t,
                        i,
                        r,
                        u,
                        e
                    )),
                    n.push(f);
            });
        }
        function y(i) {
            var u, r;
            for (
                ht = !0,
                    u = yu,
                    Roblox.DeviceFeatureDetection.isTouch && (u = au),
                    r = 0;
                r < n.length;
                r++
            )
                n[r].isShown &&
                    (t
                        ? n[r].numberOfRowsToOccupy > 1
                            ? n[r].populateGamesList(
                                  Math.max(
                                      cu,
                                      (p + 1) * n[r].numberOfRowsToOccupy
                                  ),
                                  hu
                              )
                            : n[r].populateGamesList(u, vu)
                        : n[r].populateGamesList(ri));
            i && bt();
        }
        function ui() {
            $(".games-list-container").each(function () {
                var n = $(this).data("numberofrows");
                if (typeof n == "number") {
                    n < 1 && (n = 1);
                    var r = $(window).width() <= ai,
                        t = r ? at : eu,
                        u = r ? gu : fu,
                        i = $(this).find(".games-list");
                    t === at && n === 1 ? i.height(t) : i.height(t * n + u),
                        n > 1 && i.addClass("wrap-games");
                }
            });
        }
        function vf() {
            $(".games-list-container").each(function () {
                var n = $(this).data("numberofrows");
                typeof n == "number" && $(this).find(".games-list").height("");
            });
        }
        function ir() {
            var r = parseInt(
                    $($(".games-list-container")[0]).css("padding-left")
                ),
                n = $("#GamesListsContainer").width(),
                i,
                t;
            n > r ? (n -= r) : (n = 0),
                (p = Math.floor(n / b)),
                Roblox.GamesPageContainerBehavior.areAdsInSearchResults() &&
                    ((i = $(
                        "<div class='ads-in-game-search' id='temp-remove'><div class='game-card-container game-item'></div></div>"
                    )),
                    $("#Footer").append(i),
                    (t = i.children(".game-card-container").width()),
                    $("#temp-remove").remove(),
                    t < b && (t = b),
                    (p = Math.floor(n / t)));
        }
        function bf() {
            var u = -1,
                f = parseInt($("#GamesListsContainer").css("min-height")) || 0,
                e = Math.max($(window).height(), f) - (ku + (gi + bu) * g),
                o = Math.floor(e / tt),
                r = $(".games-list-container[data-numberofrows]"),
                i;
            for (
                w = t ? 1 : Math.max(1, Math.floor((2 * o) / g)), i = 0;
                i < n.length;
                i++
            )
                n[i].isShown &&
                    ((n[i].numberOfRowsToOccupy =
                        t &&
                        Roblox.GamesListBehavior
                            .isUserEligibleForMultirowFirstSort &&
                        i === 0
                            ? tf
                            : t && r.length > i
                            ? $(r[i]).data("numberofrows")
                            : w),
                    (u = i));
        }
        function rf() {
            for (var i = 0; i < n.length; i++)
                !t && n[i].isShown ? n[i].showOverflow() : n[i].hideOverflow();
            t && rt(),
                $("#GamesPageLeftColumn").attr("data-searchstate") == "on" &&
                    n[n.length - 1].showOverflow();
        }
        function wt() {
            for (var t = 0; t < n.length; t++)
                $("#" + n[t].divId).css("top", "");
        }
        function rt() {
            for (
                var r = !0, i = $(window).width() <= ai - pu ? wu : nt, t = 0;
                t < n.length;
                t++
            )
                n[t].isShown &&
                    (r && (r = !1),
                    i === nt &&
                        $("#" + n[t].divId).css(
                            "margin-bottom",
                            "-" + i + "px"
                        ));
        }
        function cf(n) {
            nt = n;
        }
        function hf() {
            $(".games-list-container").each(function (n, t) {
                var i = $(t).attr("id"),
                    r = $("#" + i).find(".list-item").length,
                    u = $("#" + i)
                        .find(".list-item")
                        .outerWidth(!0),
                    f = $("#" + i)
                        .find(".horizontally-scrollable")
                        .css("left");
                wi($(t), u, r, f);
            });
        }
        function hi(n, t, i, r) {
            var f = n / t,
                u;
            return (
                (f = isNaN(f) ? 0 : Math.floor(f)),
                (r = !r || isNaN(parseInt(r)) ? 0 : Math.abs(parseInt(r))),
                (u = r / t),
                (u = isNaN(u) ? 0 : Math.floor(u)),
                i - u <= f
            );
        }
        function wi(n, t, i, r) {
            var u = hi(n.width(), t, i, r);
            n.find(".scroller.next").toggleClass("disabled", u);
        }
        function k() {
            ir(), bf(), rf();
        }
        function sf() {
            $('[data-toggle="dropdown-menu"]  li').click(function (n) {
                var t = $(n.currentTarget);
                t.closest(".input-group-btn")
                    .find('[data-bind="label"]')
                    .attr("data-value", t.attr("data-value"))
                    .end()
                    .end()
                    .trigger("change");
            }),
                $('.games-selection [data-toggle="selection"]').change(
                    function (n) {
                        var t = $(n.currentTarget),
                            i = $(this)
                                .find("option:selected")
                                .attr("data-value");
                        t.parent()
                            .find('[data-bind="label"]')
                            .attr("data-value", i);
                    }
                );
        }
        function r(n, t) {
            var i = $(n),
                u = i.find("select"),
                r;
            if (u && u.length > 0)
                return (
                    i
                        .find("option")
                        .filter(function () {
                            return $(this).attr("data-value") == t;
                        })
                        .attr("selected", !0),
                    !0
                );
            (r = i.find("ul [data-value='" + t + "']")),
                r.length > 0 &&
                    i
                        .closest(".input-group-btn")
                        .find('[data-bind="label"]')
                        .text(r.text())
                        .attr("data-value", r.attr("data-value"));
        }
        function of() {
            var n, t;
            $(".games-page-filters .games-page-filter").each(function () {
                $(this).on("change", function () {
                    (n = $(this).attr("id")),
                        (t =
                            $(this).find("select") &&
                            $(this).find("select").length > 0
                                ? $(this)
                                      .find("option:checked")
                                      .attr("data-value")
                                : $(this)
                                      .find("[data-bind='label']")
                                      .attr("data-value")),
                        t &&
                            n &&
                            (v(n, t), it || ((u = !0), ot(), (u = !1)), y(!0));
                });
            });
        }
        function v(n, t) {
            ef(), ut && $("html").hide();
            switch (n) {
                case "SortFilter":
                    ff(t), uf(t), r($("#SortFilter"), t);
                    break;
                case "TimeFilter":
                    uu(t), r($("#TimeFilter"), t);
                    break;
                case "GenreFilter":
                    nf(t), r($("#GenreFilter"), t);
            }
            ut &&
                setTimeout(function () {
                    $("html").show();
                }, pt);
        }
        function ef() {
            for (var t = 0; t < n.length; t++) n[t].resetStartIndex();
        }
        function ff(n) {
            $.inArray(n, yi) !== -1
                ? $("#TimeFilter").addClass("hidden")
                : $("#TimeFilter").removeClass("hidden"),
                $.inArray(n, si) !== -1
                    ? $("#GenreFilter").addClass("hidden")
                    : $("#GenreFilter").removeClass("hidden"),
                $(".games-page-filters").removeClass("loading");
        }
        function uf(n) {
            tu(),
                wt(),
                sr(n),
                rt(),
                k(),
                $("#GamesPageRightColumnSidebar").length > 0 &&
                    (n !== "default" ||
                        $("#GamesPageRightColumnSidebar").hasClass(c) ||
                        ($("#GamesPageRightColumnSidebar").removeClass(),
                        $("#GamesPageRightColumnSidebar").addClass(c))),
                lt(n) ? r($("#TimeFilter"), 2) : r($("#TimeFilter"), 0);
        }
        function uu(n) {
            lr(n);
        }
        function nf(n) {
            iu(n);
        }
        function iu(t) {
            for (var i = 0; i < n.length; i++) n[i].genreId = t;
        }
        function lr(t) {
            for (var i = 0; i < n.length; i++) n[i].timeFilter = t;
        }
        function er() {
            r(
                $("#SortFilter"),
                $("#SortFilter .rbx-selection-label").attr("data-default")
            ),
                r(
                    $("#TimeFilter"),
                    $("#TimeFilter .rbx-selection-label").attr("data-default")
                ),
                r(
                    $("#GenreFilter"),
                    $("#GenreFilter .rbx-selection-label").attr("data-default")
                );
        }
        function rr() {
            var n = {};
            e && o !== ""
                ? Roblox.GamesDisplayShared.updateURLFromSearchState()
                : ((n = ci()),
                  h.replaceState(
                      n.urlStateObject,
                      Roblox.GamesPageContainerBehavior.Resources.pageTitle,
                      "?" + n.urlStateString
                  ));
        }
        function ot() {
            var n = ci();
            h.pushState(
                n.urlStateObject,
                Roblox.GamesPageContainerBehavior.Resources.pageTitle,
                "?" + n.urlStateString
            );
        }
        function lt(n) {
            var t =
                    Roblox.GamesPageContainerBehavior.isTopRatedDefaultToWeeklyEnabled(),
                i =
                    Roblox.GamesPageContainerBehavior.isTopPaidDefaultToWeeklyEnabled();
            return (t && n == 11) ||
                (i && n == 9) ||
                n == 14 ||
                n == 2 ||
                n == 16
                ? !0
                : !1;
        }
        function ci() {
            var i = "",
                u = {},
                r,
                f;
            if (
                ($(".games-page-filters .games-page-filter").each(function () {
                    (filterType = $(this).attr("id")),
                        (selectedVal = $(this)
                            .find("[data-bind='label']")
                            .attr("data-value")),
                        filterType == "TimeFilter" &&
                            lt(u.SortFilter) &&
                            selectedVal == 0 &&
                            (selectedVal = 2),
                        typeof selectedVal != "undefined" &&
                            filterType &&
                            !$(this).hasClass("hidden") &&
                            ((i +=
                                (i === "" ? "" : "&") +
                                filterType +
                                "=" +
                                selectedVal),
                            (u[filterType] = selectedVal));
                }),
                !t)
            )
                for (r = 0; r < n.length; r++)
                    n[r].isShown &&
                        n[r].minBCLevel === 1 &&
                        (i += (i === "" ? "" : "&") + "BC=1"),
                        (u.BC = 1);
            return (f = { urlStateString: i, urlStateObject: u });
        }
        function ki(n) {
            if (!u) {
                if (n.hasOwnProperty("keyword"))
                    $("#GamesPageSearch").attr("data-keyword", n.keyword),
                        $(
                            "#SearchResultsContainer .search-query-text"
                        ).text() !== n.keyword &&
                            $("#GamesPageSearch .SearchIconButton").click();
                else {
                    Roblox.GamesDisplayShared.toggleSearch("reset"), (it = !0);
                    for (var t in n) v(t, n[t]);
                    (it = !1), y(ht);
                }
                Roblox.AdsHelper.GamesPage.checkAdDisplayState(),
                    Roblox.AdsHelper.GamesPage.refreshOldAds();
            }
        }
        function ur() {
            $(document).on("GuttersHidden", function () {
                if (s) {
                    (s = !1),
                        Roblox.AdsHelper.AdRefresher.registerAd(
                            "GamePageAdDiv1"
                        ),
                        Roblox.AdsHelper.AdRefresher.registerAd(
                            "GamePageAdDiv2"
                        ),
                        (i = $("#LeftGutterAdContainer")),
                        (f = $("#RightGutterAdContainer")),
                        $("#GamesPageLeftColumn").css(
                            "margin",
                            "0 345px 0 10px"
                        ),
                        i.hide(),
                        f.hide(),
                        $("#GutterAdStyles").remove();
                    var n =
                        Roblox && Roblox.Endpoints
                            ? Roblox.Endpoints.getAbsoluteUrl(
                                  "games/rightcolumn"
                              )
                            : "games/rightcolumn";
                    $("#GamesPageRightColumnSidebar").html(
                        "<iframe id='GamesRightColumn' src='" +
                            n +
                            "' scrolling='no' frameBorder='0' style='height:550px;width:330px;border:0px;overflow:hidden'></iframe>"
                    );
                }
            });
        }
        function fr() {
            $(document).on("FilmStripHidden", function () {
                $("#GamePageAdDiv3").hide();
                var n =
                    Roblox && Roblox.Endpoints
                        ? Roblox.Endpoints.getAbsoluteUrl("games/rightcolumn")
                        : "games/rightcolumn";
                $("#GamesPageRightColumnSidebar").html(
                    "<iframe id='GamesRightColumn' src='" +
                        n +
                        "' scrolling='no' frameBorder='0' style='height:550px;width:330px;border:0px;overflow:hidden'></iframe>"
                );
            });
        }
        function li(n) {
            return n > ct + 20 + 2 * d ? d : Math.max((n - 20 - ct) / 2, 0);
        }
        function ii(t) {
            for (var i = 0; i < n.length; i++)
                if (n[i].divId === "GamesListContainer" + t) return n[i];
            return null;
        }
        function tu() {
            for (var t = 0; t < n.length; t++) n[t].hide();
            g = 0;
        }
        function sr(n) {
            if (
                Roblox.GamesPageContainerBehavior.FilterValueToGamesListsIdSuffixMapping.hasOwnProperty(
                    n
                )
            ) {
                (t = !0), ui();
                for (
                    var i = 0;
                    i <
                    Roblox.GamesPageContainerBehavior
                        .FilterValueToGamesListsIdSuffixMapping[n].length;
                    i++
                )
                    ti(
                        Roblox.GamesPageContainerBehavior
                            .FilterValueToGamesListsIdSuffixMapping[n][i],
                        t
                    );
                $("#Footer").removeClass("hidden"),
                    $("#ResponsiveWrapper")
                        .addClass("games-lists-multiple")
                        .removeClass("games-lists-single");
            } else
                (t = !1),
                    vf(),
                    ti(n, t),
                    $("#Footer").addClass("hidden"),
                    $("#ResponsiveWrapper")
                        .addClass("games-lists-single")
                        .removeClass("games-lists-multiple");
        }
        function ti(n, t) {
            var i = ii(n);
            i && (i.show(t), g++);
        }
        function hr() {
            (a = $(window).width()),
                (l = $(window).height()),
                $("#GamesPageRightColumnSidebar").length > 0 &&
                    (vi = $("#GamesPageRightColumnSidebar").position().top);
        }
        function fi() {
            return t || !1;
        }
        function cr() {
            return ft;
        }
        function ar(n) {
            ft = n ? !0 : !1;
        }
        function ei() {
            return p;
        }
        function vr() {
            return w;
        }
        function yr() {
            return vt;
        }
        function pr() {
            return yt;
        }
        function wr() {
            return Roblox.GamesPageContainerBehavior.DeviceTypeId;
        }
        function bi() {
            Roblox.GamesDisplayShared.toggleSearch("reset"),
                v("SortFilter", "default"),
                (u = !0),
                ot(),
                (u = !1),
                y(!0);
        }
        function br() {
            var n = $(window).width() || 0;
            return n >= 980
                ? "move-with-window-stick-right"
                : "move-with-window-min-left";
        }
        function gt() {
            var i = $(this).closest(".games-list-container").attr("id") || "",
                t = i.replace("GamesListContainer", ""),
                r = ii(t);
            return (
                r != null &&
                    (v("SortFilter", t), (u = !0), ot(), (u = !1), y(!0)),
                Roblox.AdsHelper.GamesPage.checkAdDisplayState(),
                !1
            );
        }
        function ni() {
            return (
                $(window).scrollTop() >=
                $(document).height() - $(window).height() - oi
            );
        }
        function st() {
            for (var t = 0; t < n.length; t++)
                n[t].isShown &&
                    n[t].appendToGamesList(n[t].numberOfGamesToFetch);
        }
        function kr(n) {
            return $.inArray(n, su) !== -1
                ? "/games/moreresultsuncached"
                : "/games/moreresultscached";
        }
        function bt() {
            Roblox.AdsHelper.GamesPage.refreshAds();
            var n = $("#GamesRightColumn")[0];
            n != null &&
                n.contentWindow.Roblox.RightColumnBehavior.refreshAds();
        }
        function dr() {
            return t;
        }
        function gr(n) {
            t = n;
        }
        function nu() {
            return et ? et : 0;
        }
        function nr(n) {
            et = n;
        }
        function kt(n, t, i) {
            if (
                fi() ||
                !Roblox.GamesPageContainerBehavior.areAdsInSearchResults()
            )
                return 0;
            var r = Math.ceil(i / n);
            return r * t;
        }
        function wf(n) {
            var t = tt,
                i = ei(),
                r = kt(t, i, n);
            nr(r);
        }
        function af() {
            var n = $(".overflow-visible .in-game-search-ad").last(),
                t = 0;
            return n.length > 0 && n.hasClass("ad-order-even") && (t = 1), t;
        }
        var or = 300,
            du = 50,
            b = 161,
            ku = 240,
            gi = 40,
            bu = 40,
            tt = 220,
            nt = 51,
            wu = 115,
            ai = 544,
            pu = 18,
            yu = 14,
            vu = 14,
            au = 16,
            ri = 60,
            lu = 60,
            cu = 40,
            hu = 30,
            ct = 970,
            yi = [],
            si = [],
            su = [5, 6, 10, 18],
            ou = 175,
            tr = 1480,
            df = 2,
            eu = 235,
            fu = 36,
            at = 143,
            gu = 36,
            n = [],
            g = 0,
            p,
            w,
            tf = 4,
            a,
            l,
            vi,
            c,
            t,
            pi = 0,
            h = window.History,
            ht = !1,
            it = !1,
            u = !1,
            di = !1,
            s = !1,
            i,
            f,
            d,
            lf,
            oi = 400,
            ne = !1,
            vt = !1,
            yt = !1,
            ut,
            pt,
            gf = [],
            e = !1,
            o = "",
            dt = 40,
            ft = !1,
            et = 0,
            ru = 1326,
            pf = 800,
            kf = 0;
        return (
            $(function () {
                sf(),
                    (document.title =
                        Roblox.GamesPageContainerBehavior.Resources.pageTitle),
                    ui(),
                    $("#SortFilter [data-hidetimefilter]").each(function (
                        n,
                        t
                    ) {
                        yi.push($(t).attr("data-value"));
                    }),
                    $("#SortFilter [data-hidegenrefilter]").each(function (
                        n,
                        t
                    ) {
                        si.push($(t).attr("data-value"));
                    }),
                    (vt = $("#FiltersAndSort").data("defaultweeklyratings")),
                    (yt = $("#FiltersAndSort").data("defaulttoppaidtoweekly")),
                    (lf = $("div.nav-container")),
                    yf(),
                    $("#GamesPageRightColumnSidebar").length > 0 &&
                        (c = $("#GamesPageRightColumnSidebar").attr("class")),
                    (e = $("#ResponsiveWrapper").data("gamessearchonpage")),
                    (ft = $("#ResponsiveWrapper").data(
                        "adsingamesearchresultsenabled"
                    )),
                    (o = $("#searchbox").data("default")),
                    e &&
                        o !== "" &&
                        $("#GamesPageSearch").attr("data-keyword", o),
                    (ut =
                        $("div[data-worseperformanceenabled]").data(
                            "worseperformanceenabled"
                        ) === "True"),
                    (pt = Number(
                        $("div[data-worseperformancedelay]").data(
                            "worseperformancedelay"
                        )
                    )),
                    (i = $("#LeftGutterAdContainer")),
                    (f = $("#RightGutterAdContainer")),
                    (s = i.length !== 0),
                    (di = $("#Leaderboard-Abp").length !== 0),
                    $(".games-filter-resetter").click(bi),
                    $(".games-filter-changer").click(gt),
                    s
                        ? (Roblox.AdsHelper.AdRefresher.registerAd(
                              "LeftGutterAdContainer"
                          ),
                          Roblox.AdsHelper.AdRefresher.registerAd(
                              "RightGutterAdContainer"
                          ))
                        : (Roblox.AdsHelper.AdRefresher.registerAd(
                              "GamePageAdDiv1"
                          ),
                          Roblox.AdsHelper.AdRefresher.registerAd(
                              "GamePageAdDiv2"
                          ),
                          Roblox.AdsHelper.AdRefresher.registerAd(
                              "GamePageAdDiv3"
                          )),
                    di &&
                        Roblox.AdsHelper.AdRefresher.registerAd(
                            "Leaderboard-Abp"
                        ),
                    of(),
                    h.Adapter.bind(window, "statechange", function () {
                        ki(h.getState().data);
                    }),
                    er(),
                    rr(),
                    hr(),
                    ht || ki(h.getState().data),
                    k();
                $(".scroller, .scroller .arrow, .scroller .arrow img").on(
                    "dblclick",
                    function () {
                        return (
                            window.getSelection
                                ? window.getSelection().removeAllRanges()
                                : document.selection &&
                                  document.selection.empty(),
                            !1
                        );
                    }
                );
                $(".scroller").on("mouseover", function () {
                    $(this).find(".arrow span").addClass("hover");
                });
                $(".scroller").on("mouseout", function () {
                    $(this).find(".arrow span").removeClass("hover");
                });
                ur(),
                    fr(),
                    e && $("#SearchResultsContainer").addClass("can-search"),
                    e && o !== "" && Roblox.GamesDisplayShared.searchOnPage(dt),
                    Roblox.AdsHelper.GamesPage.checkAdDisplayState();
            }),
            $(window).resize(function () {
                var n = $(window).width(),
                    i = $(window).height();
                hf(),
                    n > a || i > l
                        ? setTimeout(function () {
                              k(),
                                  t ||
                                      (ni() && st(),
                                      n >= 980 &&
                                          $(
                                              "#GamesPageRightColumnSidebar.move-with-window-min-left"
                                          ).toggleClass(
                                              "move-with-window-min-left move-with-window-stick-right"
                                          )),
                                  (a = n),
                                  (l = i);
                          }, or)
                        : (n < a || i < l) &&
                          setTimeout(function () {
                              t
                                  ? k()
                                  : n < 980 &&
                                    $(
                                        "#GamesPageRightColumnSidebar.move-with-window-stick-right"
                                    ).toggleClass(
                                        "move-with-window-min-left move-with-window-stick-right"
                                    ),
                                  (a = n),
                                  (l = i);
                          }, du),
                    (oi = i / 2);
            }),
            $(window).scroll(function () {
                var n = $(window).scrollTop(),
                    i,
                    r;
                t ||
                    ((i = br()),
                    (r = $("#GamesPageLeftColumn").data("searchstate")),
                    n + 60 > vi
                        ? $("#GamesPageRightColumnSidebar").hasClass(i) ||
                          ($("#GamesPageRightColumnSidebar").removeClass(),
                          $("#GamesPageRightColumnSidebar").addClass(i),
                          $("#GamesPageRightColumnSidebar").addClass(
                              "games-page-right-sidebar"
                          ))
                        : $("#GamesPageRightColumnSidebar").hasClass(c) ||
                          ($("#GamesPageRightColumnSidebar").removeClass(),
                          $("#GamesPageRightColumnSidebar").addClass(c),
                          $("#GamesPageRightColumnSidebar").addClass(
                              "games-page-right-sidebar"
                          )),
                    n > pi &&
                        (!t || (e && r == "on")) &&
                        ni() &&
                        (r == "on"
                            ? Roblox.GamesDisplayShared.moreSearchResults()
                            : st())),
                    (pi = n);
            }),
            {
                GamesListHeaderHeight: gi,
                RowHeightIncludingPadding: tt,
                ColumnWidthIncludingPadding: b,
                MaxNumberOfGamesToFetchInHScrollMode: lu,
                NumberOfGamesToFetchInVScrollMode: ri,
                numGamesToFetchOnSearch: dt,
                initialAdHeight: ru,
                subsequentAdHeight: pf,
                getNumberOfColumns: ei,
                getNumberOfRows: vr,
                handleGamesFilterChangerClick: gt,
                handleGamesFilterResetClick: bi,
                isInHorizontalScrollMode: fi,
                getURLBasedOnSortFilter: kr,
                isTopRatedDefaultToWeeklyEnabled: yr,
                isTopPaidDefaultToWeeklyEnabled: pr,
                getDeviceTypeId: wr,
                toggleCarouselButtons: wi,
                doesNextButtonFitContainer: hi,
                getMultipleGamesListsDisplayedState: dr,
                setMultipleGamesListsDisplayedState: gr,
                refreshAds: bt,
                loadMoreGames: st,
                areAdsInSearchResults: cr,
                getAdSpan: nu,
                setAdSpan: nr,
                setAdSpanFromHeight: wf,
                calcAdSpan: kt,
                calcAdAlignment: af,
                calculateNumberOfColumns: ir,
                getGutterAdVisibleWidth: li,
                setAreAdsInSearchResults: ar,
                isSortFilterNeedingWeeklyDefault: lt,
                squishConsecutiveGamesListsTogether: rt,
                unsquishAllGamesLists: wt,
                setSquishHeight: cf,
            }
        );
    })()),
    (Roblox.GamesListBehavior = {}),
    (Roblox.GamesListBehavior.ExtraHeightToShowHover = 50),
    (Roblox.GamesListBehavior.MaxNumberOfGamesToLoadPerRequest = 200),
    (Roblox.GamesListBehavior.NumberOfGamesToAppendInHScrollMode = 12),
    (Roblox.GamesListBehavior.RefreshAdsInGamesPageEnabled = !1),
    (Roblox.GamesListBehavior.GamesListObject = function (n, t, i, r, u) {
        (this.divId = n),
            (this.isShown = !1),
            (this.sortFilter = t),
            (this.gameFilter = i),
            (this.timeFilter = 0),
            (this.minBCLevel = r),
            (this.genreId = 1),
            (this.numberOfRowsToOccupy = 0),
            (this.numberOfGamesToFetch = 0),
            (this.numberOfGamesOnScreen = 0),
            (this.startIndex = 0),
            (this.personalizedUniverseId = u),
            (this.jqxhr = null),
            (this.reachedHorizontalScrollMax = !1),
            (this.numberOfGamesOnLastRow = 0),
            this.attachScrollHandlers();
        $("#" + this.divId).on(
            "click",
            ".games-filter-changer",
            Roblox.GamesPageContainerBehavior.handleGamesFilterChangerClick
        );
    }),
    (Roblox.GamesListBehavior.GamesListObject.prototype = {
        populateGamesList: function (n, t) {
            var i = this,
                u;
            i.jqxhr && jqxhr.abort(),
                Roblox.AdsHelper.GamesPage.checkAdDisplayState(),
                Roblox.GamesPageContainerBehavior.calculateNumberOfColumns();
            var f = Roblox.GamesPageContainerBehavior.getURLBasedOnSortFilter(
                    i.sortFilter
                ),
                r = Roblox.GamesPageContainerBehavior.getNumberOfColumns(),
                e = Roblox.GamesPageContainerBehavior.getNumberOfRows();
            (i.numberOfGamesToFetch = Math.min(
                n,
                Roblox.GamesListBehavior.MaxNumberOfGamesToLoadPerRequest
            )),
                (i.numberOfGamesOnLastRow = 0),
                (i.timeFilter = i.getDefaultTimeFilterForSortFilter(
                    i.sortFilter,
                    i.timeFilter
                )),
                Roblox.GamesPageContainerBehavior.isInHorizontalScrollMode() &&
                i.numberOfRowsToOccupy > 1
                    ? $("#" + i.divId + " .scroller").remove()
                    : ((i.reachedHorizontalScrollMax = !1),
                      $("#" + i.divId + " .scroller.next").removeClass(
                          "hidden"
                      )),
                Roblox.GamesPageContainerBehavior.setAdSpanFromHeight(
                    Roblox.GamesPageContainerBehavior.initialAdHeight
                ),
                (u = {
                    SortFilter: i.sortFilter,
                    TimeFilter: i.timeFilter,
                    GenreID: i.genreId,
                    GameFilter: i.gameFilter,
                    MinBCLevel: i.minBCLevel,
                    StartRows: i.startIndex,
                    MaxRows: i.numberOfGamesToFetch,
                    IsUserLoggedIn:
                        Roblox.GamesPageContainerBehavior.IsUserLoggedIn,
                    NumberOfRowsToOccupy: i.numberOfRowsToOccupy,
                    NumberOfColumns: r,
                    IsInHorizontalScrollMode:
                        Roblox.GamesPageContainerBehavior.isInHorizontalScrollMode(),
                    DeviceTypeId:
                        Roblox.GamesPageContainerBehavior.getDeviceTypeId(),
                    AdSpan: Roblox.GamesPageContainerBehavior.getAdSpan(),
                    AdAlignment: 0,
                    v: 2,
                    PersonalizedUniverseId: i.personalizedUniverseId,
                }),
                i.showLoadingIndicator(),
                (i.jqxhr = $.get(f, u, function (n) {
                    var o, u, f, s;
                    (i.jqxhr = null),
                        (o = $("<div></div>").append(n)),
                        Roblox.SponsoredGames.getSponsoredGames(o),
                        Roblox.AdsHelper.GamesPage.checkAdDisplayState(),
                        (u = $("#" + i.divId + " .games-list > .games")),
                        Roblox.GamesPageContainerBehavior.isInHorizontalScrollMode() &&
                            (u = $(
                                "#" +
                                    i.divId +
                                    " .games-list .horizontally-scrollable .games"
                            )),
                        $(u)
                            .find(
                                ".game-card-container,.games-list-column, .in-game-search-ad, .list-item.game-card, .multi-rows"
                            )
                            .remove(),
                        Roblox.GamesPageContainerBehavior.isInHorizontalScrollMode() &&
                            (i.numberOfRowsToOccupy < 2
                                ? (u = $(
                                      "#" +
                                          i.divId +
                                          " .horizontally-scrollable .games"
                                  ))
                                : (u.append('<div class = "multi-rows"></div>'),
                                  (u = $(u).find(".multi-rows")))),
                        u.append(o.children()),
                        Roblox.AdsHelper.GamesPage.checkAdDisplayState(),
                        (i.numberOfGamesOnScreen = $(u).find(
                            ".game-card-container"
                        ).length),
                        Roblox.AdsHelper.GamesPage.populateNewAds(),
                        i.hideLoadingIndicator(),
                        !Roblox.GamesPageContainerBehavior.getMultipleGamesListsDisplayedState() &&
                            r * e >
                                Roblox.GamesPageContainerBehavior
                                    .NumberOfGamesToFetchInVScrollMode &&
                            Roblox.GamesPageContainerBehavior.loadMoreGames(),
                        Roblox.GamesPageContainerBehavior.isInHorizontalScrollMode() &&
                            (i.startIndex == 0 &&
                            i.numberOfGamesOnScreen <
                                Roblox.GamesPageContainerBehavior
                                    .MinimumNumberOfGamesForPersonalizedByLikedToAppear &&
                            i.personalizedUniverseId != 0
                                ? $("#" + i.divId).hide()
                                : ((f = $(
                                      "#" +
                                          i.divId +
                                          " .horizontally-scrollable"
                                  )),
                                  f.length > 0 &&
                                      ($(f).css("left", 0),
                                      $(f)
                                          .siblings(".scroller.prev")
                                          .addClass("disabled")),
                                  (s = $(u)
                                      .find(".game-card-container")
                                      .outerWidth(!0)),
                                  Roblox.GamesPageContainerBehavior.toggleCarouselButtons(
                                      $("#" + i.divId),
                                      s,
                                      i.numberOfGamesOnScreen,
                                      0
                                  ),
                                  (i.noMoreGamesToLoad =
                                      i.numberOfGamesOnScreen <
                                      i.numberOfGamesToFetch),
                                  !i.noMoreGamesToLoad &&
                                      t > 0 &&
                                      ((i.jqxhr = null),
                                      i.appendToGamesList(t)))),
                        Roblox.AdsHelper.GamesPage.refreshOldAds(),
                        Roblox.GamesDisplayShared.updateVotes(),
                        Roblox.GamesDisplayShared.fetchThumbnails();
                }));
        },
        appendToGamesList: function (n) {
            var t, i, r;
            this.jqxhr ||
                (Roblox.GamesPageContainerBehavior.isInHorizontalScrollMode() &&
                    this.reachedHorizontalScrollMax) ||
                ((t = this),
                (i = Roblox.GamesPageContainerBehavior.getURLBasedOnSortFilter(
                    t.sortFilter
                )),
                (n = Math.min(
                    n,
                    Roblox.GamesListBehavior.MaxNumberOfGamesToLoadPerRequest
                )),
                (t.timeFilter = t.getDefaultTimeFilterForSortFilter(
                    t.sortFilter,
                    t.timeFilter
                )),
                Roblox.GamesPageContainerBehavior.setAdSpanFromHeight(
                    Roblox.GamesPageContainerBehavior.subsequentAdHeight
                ),
                (r = {
                    SortFilter: t.sortFilter,
                    TimeFilter: t.timeFilter,
                    GenreID: t.genreId,
                    GameFilter: t.gameFilter,
                    MinBCLevel: t.minBCLevel,
                    StartRows: t.numberOfGamesOnScreen,
                    MaxRows: n,
                    IsUserLoggedIn:
                        Roblox.GamesPageContainerBehavior.IsUserLoggedIn,
                    NumberOfRowsToOccupy: t.numberOfRowsToOccupy,
                    NumberOfColumns:
                        Roblox.GamesPageContainerBehavior.getNumberOfColumns(),
                    IsInHorizontalScrollMode:
                        Roblox.GamesPageContainerBehavior.isInHorizontalScrollMode(),
                    DeviceTypeId:
                        Roblox.GamesPageContainerBehavior.getDeviceTypeId(),
                    AdSpan: Roblox.GamesPageContainerBehavior.getAdSpan(),
                    AdAlignment:
                        Roblox.GamesPageContainerBehavior.calcAdAlignment(),
                    v: 2,
                    PersonalizedUniverseId: t.personalizedUniverseId,
                }),
                t.showLoadingIndicator(),
                (t.jqxhr = $.get(i, r, function (i) {
                    var u, r;
                    (t.jqxhr = null),
                        (u = $("<div></div>").append(i)),
                        Roblox.SponsoredGames.getSponsoredGames(u),
                        (r = $("#" + t.divId + " .games-list > .games")),
                        Roblox.GamesPageContainerBehavior.isInHorizontalScrollMode() &&
                            (r =
                                t.numberOfRowsToOccupy > 1
                                    ? $("#" + t.divId + " .multi-rows")
                                    : $(
                                          "#" +
                                              t.divId +
                                              " .horizontally-scrollable .games"
                                      )),
                        r.append(u.children()),
                        (t.numberOfGamesOnScreen = $(r).find(
                            ".game-card-container"
                        ).length),
                        Roblox.AdsHelper.GamesPage.checkAdDisplayState(),
                        Roblox.AdsHelper.GamesPage.populateNewAds(),
                        Roblox.AdsHelper.GamesPage.refreshOldAds(),
                        t.hideLoadingIndicator(),
                        Roblox.GamesPageContainerBehavior.isInHorizontalScrollMode() &&
                            ((t.noMoreGamesToLoad =
                                $(i).find(".game-card-container").length < n),
                            (t.reachedHorizontalScrollMax =
                                t.numberOfGamesOnScreen >
                                Roblox.GamesPageContainerBehavior
                                    .MaxNumberOfGamesToFetchInHScrollMode)),
                        Roblox.GamesDisplayShared.updateVotes(),
                        Roblox.GamesDisplayShared.fetchThumbnails();
                })));
        },
        getDefaultTimeFilterForSortFilter: function (n, t) {
            var i = $("#TimeFilter .rbx-selection-label").attr("data-default"),
                r = Roblox.GamesPageContainerBehavior,
                u = r.isInHorizontalScrollMode();
            return (
                Roblox.GamesPageContainerBehavior.isSortFilterNeedingWeeklyDefault(
                    n
                )
                    ? t == 0 && (t = 2)
                    : i == 0
                    ? (t = 0)
                    : t == 0 && (t = i),
                u &&
                    Roblox.GamesPageContainerBehavior.isSortFilterNeedingWeeklyDefault(
                        n
                    ) &&
                    (t = 2),
                t
            );
        },
        show: function (n) {
            n &&
                $("#" + this.divId + " .games-list")
                    .find(
                        ".game-card-container,.games-list-column,.in-game-search-ad, .list-item.game-card"
                    )
                    .remove(),
                (this.isShown = !0),
                $("#" + this.divId).removeClass("hidden"),
                n
                    ? $(
                          "#" + this.divId + " .show-in-multiview-mode-only"
                      ).removeClass("hidden")
                    : $(
                          "#" + this.divId + " .show-in-multiview-mode-only"
                      ).addClass("hidden");
        },
        hide: function () {
            (this.isShown = !1),
                (this.numberOfRowsToOccupy = 0),
                $("#" + this.divId).addClass("hidden");
        },
        showOverflow: function () {
            $("#" + this.divId).removeClass("overflow-hidden"),
                $("#" + this.divId).addClass("overflow-visible");
        },
        hideOverflow: function () {
            $("#" + this.divId).removeClass("overflow-visible"),
                $("#" + this.divId).addClass("overflow-hidden");
        },
        attachScrollHandlers: function () {
            var n = this;
            $("#" + this.divId).on("click", ".scroller", function () {
                var t = this,
                    i = "next";
                t &&
                    (t.className.indexOf("prev") !== -1 && (i = "prev"),
                    n.handleHorizontalScroll(i));
            });
        },
        handleHorizontalScroll: function (n) {
            var u = $("#" + this.divId + " .horizontally-scrollable"),
                i,
                t,
                r,
                f,
                e;
            u.length > 0 &&
                ($(u).stop("", !0, !0),
                (i = parseInt($(u).css("left")) || 0),
                (i = this.getClosestColumnBoundary(i)),
                (r = $("#" + this.divId + " .scroller.next")),
                (f = $("#" + this.divId + " .scroller.prev")),
                n === "prev"
                    ? ((t = i + this.getLeftBoundaryOfLastVisibleColumn()),
                      (t = Math.min(t, 0)),
                      r.removeClass("disabled"))
                    : r.hasClass("disabled") ||
                      (this.appendToGamesList(
                          Roblox.GamesListBehavior
                              .NumberOfGamesToAppendInHScrollMode
                      ),
                      (t = i - this.getLeftBoundaryOfLastVisibleColumn()),
                      (this.noMoreGamesToLoad ||
                          this.reachedHorizontalScrollMax) &&
                          !this.isAvailableWidthFullyOccupied(t) &&
                          r.addClass("disabled")),
                $(u).animate({ left: t + "px" }),
                Roblox.GamesListBehavior.RefreshAdsInGamesPageEnabled &&
                    Roblox.GamesPageContainerBehavior.refreshAds(),
                (e = t < 0),
                e
                    ? f.removeClass("disabled")
                    : r.hasClass("disabled") || f.addClass("disabled"));
        },
        showLoadingIndicator: function () {
            Roblox.GamesPageContainerBehavior.isInHorizontalScrollMode() ||
                $("#" + this.divId).css("cursor", "wait");
        },
        hideLoadingIndicator: function () {
            $("#" + this.divId).css("cursor", "auto");
        },
        resetStartIndex: function () {
            (this.startIndex = 0),
                $("#" + this.divId + " .previous").addClass("disabled"),
                $("#" + this.divId + " .next").removeClass("disabled");
        },
        maxHeight: function () {
            var n = 0;
            return (
                this.isShown &&
                    ((n +=
                        this.numberOfRowsToOccupy *
                        Roblox.GamesPageContainerBehavior
                            .RowHeightIncludingPadding),
                    (n +=
                        Roblox.GamesPageContainerBehavior
                            .GamesListHeaderHeight),
                    (n += Roblox.GamesListBehavior.ExtraHeightToShowHover)),
                n
            );
        },
        getClosestColumnBoundary: function (n) {
            var t = Math.abs(
                n %
                    Roblox.GamesPageContainerBehavior
                        .ColumnWidthIncludingPadding
            );
            return n + t;
        },
        getLeftBoundaryOfLastVisibleColumn: function () {
            var n = $("#" + this.divId + " .games-list").width(),
                t = Math.floor(
                    n /
                        Roblox.GamesPageContainerBehavior
                            .ColumnWidthIncludingPadding
                );
            return (
                t *
                Roblox.GamesPageContainerBehavior.ColumnWidthIncludingPadding
            );
        },
        isAvailableWidthFullyOccupied: function (n) {
            var t = $("#" + this.divId + " .games-list").width(),
                i = Math.ceil(
                    t /
                        Roblox.GamesPageContainerBehavior
                            .ColumnWidthIncludingPadding
                ),
                r = Math.abs(
                    n /
                        Roblox.GamesPageContainerBehavior
                            .ColumnWidthIncludingPadding
                );
            return this.numberOfGamesOnScreen >= r + i;
        },
    }); // Accounts/EmailEntryModal.js

typeof Roblox.EmailEntryModal == "undefined" &&
    (Roblox.EmailEntryModal = (function () {
        function t(t, i) {
            var r = $("div#EmailEntryModal").filter(":first");
            r.length == 0 &&
                (r = $(
                    "<div id='EmailEntryModal' class='modalPopup'><div class='Message'></div></div>"
                )),
                t
                    ? r.find("div.Message").html(t)
                    : $(i).appendTo(r.find("div.Message")),
                r.modal(n);
        }
        var n = {
            overlayClose: !0,
            escClose: !0,
            opacity: 80,
            overlayCss: { backgroundColor: "#000" },
        };
        return { open: t };
    })()); // Games/GameDetailReferral.js

(Roblox = Roblox || {}),
    (Roblox.GameDetailReferral = Roblox.GameDetailReferral || {}),
    (Roblox.GameDetailReferral.AppendUrl = function (n, t, i) {
        if (!n.data("modified")) {
            var e = $(t).length,
                u = i || n,
                f = u.attr("href"),
                r = f;
            (r += f.indexOf("?") !== -1 ? "&" : "?"),
                (r +=
                    "LocalTimestamp=" +
                    new Date().toISOString() +
                    "&TotalInSort=" +
                    e),
                u.attr("href", r),
                n.data("modified", !0);
        }
    }),
    $(function () {
        var n = ".game-card-link";
        $("#recently-visited-places").on(
            "mousedown",
            ".game-card",
            function () {
                Roblox.GameDetailReferral.AppendUrl(
                    $(this).find(n),
                    "#recently-visited-places .list-item"
                );
            }
        );
        $("#my-favorties-games").on("mousedown", ".game-card", function () {
            Roblox.GameDetailReferral.AppendUrl(
                $(this).find(n),
                "#my-favorties-games .game-card"
            );
        });
        $("#friend-activity").on("mousedown", ".game-card", function () {
            Roblox.GameDetailReferral.AppendUrl(
                $(this).find(n),
                "#friend-activity .game-card"
            );
        });
        $("#UserPlaces div.Thumbnail").on("mousedown", function () {
            Roblox.GameDetailReferral.AppendUrl(
                $(this),
                ".Thumbnail",
                $(this).find("a")
            );
        });
        $("#GamesListsContainer").on("mousedown", ".game-card", function () {
            var t = $(this).parent().siblings().length + 1;
            Roblox.GameDetailReferral.AppendUrl($(this).find(n), new Array(t));
        });
        $("#my-recommended-games").on("mousedown", ".game-card", function () {
            Roblox.GameDetailReferral.AppendUrl(
                $(this).find(n),
                "#my-recommended-games .game-card"
            );
        });
        $("#HomeContainer #FeaturedGamesContainer").on(
            "mousedown",
            ".item-place a",
            function () {
                Roblox.GameDetailReferral.AppendUrl(
                    $(this),
                    "#FeaturedGamesContainer .item-place"
                );
            }
        );
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
    }); // Games/SponsoredGames/SponsoredGames.js

typeof Roblox == "undefined" && (Roblox = {}),
    typeof Roblox.SponsoredGames == "undefined" &&
        (Roblox.SponsoredGames = new (function () {
            function t(n, t) {
                n.find(".game-card-thumb").attr("src", t.ThumbnailUrl),
                    n.find(".game-card-link").attr("href", t.GameUrl),
                    n
                        .find(".game-card-name")
                        .attr("title", t.UniverseName)
                        .html(t.UniverseName),
                    n.css("display", "inline-block");
            }
            function n(n) {
                $(n).remove();
            }
            function i(i) {
                $.ajax({
                    url: "/sponsored-games/serve",
                    type: "POST",
                    data: {
                        deviceType: i.deviceType,
                        sortFilter: i.sortFilter,
                        genreId: i.genreId,
                        timeFilter: i.timeFilter,
                        pageType: i.pageType,
                        position: i.position,
                    },
                    async: !0,
                    success: function (r) {
                        r === undefined
                            ? n(i.nativeAdPositionDom)
                            : t(i.nativeAdPositionDom, r);
                    },
                    error: function () {
                        n(i.nativeAdPositionDom);
                    },
                });
            }
            function r(n) {
                $(n.find(".sponsored-game")).each(function () {
                    if (!$(this).find("a").attr("href")) {
                        var n = $(this),
                            t = {
                                nativeAdPositionDom: n,
                                deviceType:
                                    Roblox.GamesPageContainerBehavior.getDeviceTypeId(),
                                sortFilter: n.data("sort-filter"),
                                genreId: n.data("genre-filter"),
                                timeFilter: n.data("time-filter"),
                                pageType: n.data("page-type"),
                                position: n.data("position"),
                            };
                        Roblox.SponsoredGames.serveNativeAd(t);
                    }
                });
            }
            return { serveNativeAd: i, getSponsoredGames: r };
        })()); // utilities/popover.js

var Roblox = Roblox || {};
Roblox.Popover = (function () {
    "use strict";
    function u(n, i) {
        var u = $(n),
            f = $(i),
            e = $(t),
            h = e.outerWidth(),
            c = u.find(r).outerWidth(),
            l = e.offset().left,
            o = 0,
            s;
        (u.hasClass("bottom") || u.hasClass("top")) &&
            ((s =
                $("body").outerWidth() - parseInt(f.width() + f.offset().left)),
            (o = $("body").outerWidth() - l - s - h / 2 - c / 2),
            u.find(r).css("right", o));
    }
    function f(t) {
        return t.data("hiddenClassName") && (n = t.data("hiddenClassName")), n;
    }
    function o() {
        $(t).on("click touchstart", function (t) {
            var s = $(this).data("bind"),
                h = s ? "#" + s : i,
                r = $(h),
                c = $(this).data("container"),
                l = c ? "#" + c : e,
                o;
            (n = f(r)),
                r.hasClass("manual") || r.toggleClass(n),
                (o = !r.hasClass(n)),
                $(document).triggerHandler("Roblox.Popover.Status", {
                    isOpen: o,
                    eventType: t.type,
                }),
                o && u(h, l);
        });
    }
    function s() {
        $("body").on("click touchstart", function (r) {
            $(t).each(function () {
                var u = $(this).data("bind"),
                    t = u ? $("#" + u) : $(i),
                    o = "roblox-popover-open-always",
                    e = "roblox-popover-close";
                if (((n = f(t)), $(t).hasClass(o) && !$(r.target).hasClass(e)))
                    return !1;
                (!$(r.target).hasClass(e) &&
                    ($(this).is(r.target) ||
                        $(this).has(r.target).length !== 0 ||
                        t.has(r.target).length !== 0 ||
                        t.hasClass(n) ||
                        r.type !== "click")) ||
                    (t.addClass(n),
                    $(document).triggerHandler("Roblox.Popover.Status", {
                        isHidden: !0,
                        eventType: r.type,
                    }));
            });
        });
    }
    function h() {
        o(), s();
    }
    var t = ".roblox-popover",
        i = ".roblox-popover-content",
        e = ".roblox-popover-container",
        r = ".arrow",
        n = "hidden";
    return (
        $(function () {
            h();
        }),
        { setUpTrianglePosition: u }
    );
})(); // Navigation/ShopAmazon.js

(Roblox = Roblox || {}),
    (Roblox.ShopAmazon = (function () {
        function t() {
            $("a.roblox-shop-interstitial").on("click", function (n) {
                n.preventDefault(),
                    Roblox.Dialog.open({
                        titleText: "You are leaving ROBLOX",
                        bodyContent: r(),
                        allowHtmlContentInBody: !0,
                        acceptText: "Continue to Shop",
                        declineText: "Cancel",
                        xToCancel: !0,
                        acceptColor: Roblox.Dialog.green,
                        declineColor: Roblox.Dialog.white,
                        onAccept: i,
                    });
            });
        }
        function i() {
            window.open(n, "_blank");
        }
        function r() {
            return (
                "<p>Your are about to visit our amazon store. You will be redirected to ROBLOX merchandise store on <a class='text-link' target='_blank' href='" +
                n +
                "' >Amazon.com</a>.</p> <p>Please note that you need to be over 18 to purchase products online. The amazon store is not part of rovive.pro and is governed by a separate privacy policy.</p>"
            );
        }
        function u() {
            t();
        }
        var n =
            "https://www.amazon.com/roblox?&_encoding=UTF8&tag=r05d13-20&linkCode=ur2&linkId=4ba2e1ad82f781c8e8cc98329b1066d0&camp=1789&creative=9325";
        $(function () {
            u();
        });
    })()); // GenericConfirmation.js

typeof Roblox == "undefined" && (Roblox = {}),
    typeof Roblox.GenericConfirmation == "undefined" &&
        (Roblox.GenericConfirmation = (function () {
            function w() {
                (n.isOpen = !1), t();
            }
            function k(t) {
                var a, e, o, s, l;
                (n.isOpen = !0),
                    (a = {
                        titleText: "",
                        bodyContent: "",
                        footerText: "",
                        acceptText: Roblox.Resources.GenericConfirmation.yes,
                        declineText: Roblox.Resources.GenericConfirmation.No,
                        acceptColor: u,
                        declineColor: f,
                        xToCancel: !1,
                        onAccept: function () {
                            return !1;
                        },
                        onDecline: function () {
                            return !1;
                        },
                        onCancel: function () {
                            return !1;
                        },
                        imageUrl: null,
                        allowHtmlContentInBody: !1,
                        allowHtmlContentInFooter: !1,
                        dismissable: !0,
                        fieldValidationRequired: !1,
                        onOpenCallback: function () {},
                    }),
                    (t = $.extend({}, a, t)),
                    (c.overlayClose = t.dismissable),
                    (c.escClose = t.dismissable),
                    (e = $(i)),
                    e.html(t.acceptText),
                    e.attr("class", "btn-large " + t.acceptColor),
                    e.unbind(),
                    e.bind("click", function () {
                        return v(e)
                            ? !1
                            : (t.fieldValidationRequired
                                  ? nt(t.onAccept)
                                  : h(t.onAccept),
                              !1);
                    }),
                    (o = $(r)),
                    o.html(t.declineText),
                    o.attr("class", "btn-large " + t.declineColor),
                    o.unbind(),
                    o.bind("click", function () {
                        return v(o) ? !1 : (h(t.onDecline), !1);
                    }),
                    $('[data-modal-handle="confirmation"] div.Title').text(
                        t.titleText
                    ),
                    (s = $("[data-modal-handle='confirmation']")),
                    t.imageUrl == null
                        ? s.addClass("noImage")
                        : (s
                              .find("img.GenericModalImage")
                              .attr("src", t.imageUrl),
                          s.removeClass("noImage")),
                    t.allowHtmlContentInBody
                        ? $(
                              "[data-modal-handle='confirmation'] div.Message"
                          ).html(t.bodyContent)
                        : $(
                              "[data-modal-handle='confirmation'] div.Message"
                          ).text(t.bodyContent),
                    $.trim(t.footerText) == ""
                        ? $(
                              '[data-modal-handle="confirmation"] div.ConfirmationModalFooter'
                          ).hide()
                        : $(
                              '[data-modal-handle="confirmation"] div.ConfirmationModalFooter'
                          ).show(),
                    t.allowHtmlContentInFooter
                        ? $(
                              '[data-modal-handle="confirmation"] div.ConfirmationModalFooter'
                          ).html(t.footerText)
                        : $(
                              '[data-modal-handle="confirmation"] div.ConfirmationModalFooter'
                          ).text(t.footerText),
                    $("[data-modal-handle='confirmation']").modal(c),
                    (l = $("a.genericmodal-close")),
                    l.unbind(),
                    l.bind("click", function () {
                        return h(t.onCancel), !1;
                    }),
                    t.xToCancel || l.hide(),
                    t.onOpenCallback();
            }
            function a(n) {
                n.hasClass(f)
                    ? n.addClass(s)
                    : n.hasClass(l)
                    ? n.addClass(e)
                    : n.hasClass(u) && n.addClass(o);
            }
            function v(n) {
                return n.hasClass(o) || n.hasClass(s) || n.hasClass(e)
                    ? !0
                    : !1;
            }
            function b() {
                var n = $(i),
                    t = $(r);
                a(n), a(t);
            }
            function g() {
                var u = $(i),
                    t = $(r),
                    n = o + " " + s + " " + e;
                u.removeClass(n), t.removeClass(n);
            }
            function p() {
                if (n.isOpen) {
                    var t = $(i);
                    t.click();
                }
            }
            function y() {
                var n = $(r);
                n.click();
            }
            function t(t) {
                (n.isOpen = !1),
                    typeof t != "undefined"
                        ? $.modal.close(t)
                        : $.modal.close();
            }
            function h(n) {
                t(), typeof n == "function" && n();
            }
            function nt(n) {
                if (typeof n == "function") {
                    var i = n();
                    if (i !== "undefined" && i == !1) return !1;
                }
                t();
            }
            var l = "btn-primary",
                u = "btn-neutral",
                f = "btn-negative",
                e = "btn-disabled-primary",
                o = "btn-disabled-neutral",
                s = "btn-disabled-negative",
                d = "btn-none",
                i = "#roblox-confirm-btn",
                r = "#roblox-decline-btn",
                n = { isOpen: !1 },
                c = {
                    overlayClose: !0,
                    escClose: !0,
                    opacity: 80,
                    overlayCss: { backgroundColor: "#000" },
                    onClose: w,
                };
            return {
                open: k,
                close: t,
                disableButtons: b,
                enableButtons: g,
                clickYes: p,
                clickNo: y,
                status: n,
                green: l,
                blue: u,
                gray: f,
                none: d,
            };
        })()),
    $(document).keypress(function (n) {
        Roblox.GenericConfirmation.status.isOpen &&
            n.which === 13 &&
            Roblox.GenericConfirmation.clickYes();
    }); // utilities/dialog.js

typeof Roblox == "undefined" && (Roblox = {}),
    typeof Roblox.Dialog == "undefined" &&
        (Roblox.Dialog = (function () {
            function d() {
                (n.isOpen = !1), r();
            }
            function nt(r) {
                var v, s, h, o, a;
                (n.isOpen = !0),
                    (v = {
                        titleText: "",
                        bodyContent: "",
                        footerText: "",
                        acceptText: Roblox.Resources.Dialog.yes,
                        declineText: Roblox.Resources.Dialog.No,
                        acceptColor: f,
                        declineColor: e,
                        xToCancel: !1,
                        onAccept: function () {
                            return !1;
                        },
                        onDecline: function () {
                            return !1;
                        },
                        onCancel: function () {
                            return !1;
                        },
                        imageUrl: null,
                        allowHtmlContentInBody: !1,
                        allowHtmlContentInFooter: !1,
                        dismissable: !0,
                        fieldValidationRequired: !1,
                        onOpenCallback: function () {},
                        cssClass: null,
                    }),
                    (r = $.extend({}, v, r)),
                    (u.overlayClose = r.dismissable),
                    (u.escClose = r.dismissable),
                    (s = $(t)),
                    s.html(r.acceptText),
                    s.attr("class", r.acceptColor),
                    s.unbind(),
                    s.bind("click", function () {
                        return l(s)
                            ? !1
                            : (r.fieldValidationRequired
                                  ? y(r.onAccept)
                                  : c(r.onAccept),
                              !1);
                    }),
                    (h = $(i)),
                    h.html(r.declineText),
                    h.attr("class", r.declineColor),
                    h.unbind(),
                    h.bind("click", function () {
                        return l(h) ? !1 : (c(r.onDecline), !1);
                    }),
                    (o = $('[data-modal-type="confirmation"]')),
                    o.find(".modal-title").text(r.titleText),
                    r.imageUrl == null
                        ? o.addClass("noImage")
                        : (o.find("img.modal-thumb").attr("src", r.imageUrl),
                          o.removeClass("noImage")),
                    r.cssClass != null && o.addClass(r.cssClass),
                    r.allowHtmlContentInBody
                        ? o.find(".modal-message").html(r.bodyContent)
                        : o.find(".modal-message").text(r.bodyContent),
                    $.trim(r.footerText) == ""
                        ? o.find(".modal-footer").hide()
                        : o.find(".modal-footer").show(),
                    r.allowHtmlContentInFooter
                        ? o.find(".modal-footer").html(r.footerText)
                        : o.find(".modal-footer").text(r.footerText),
                    o.modal(u),
                    (a = $(".modal-header .close")),
                    a.unbind(),
                    a.bind("click", function () {
                        return c(r.onCancel), !1;
                    }),
                    r.xToCancel || a.hide(),
                    $("#rbx-body").addClass("modal-mask"),
                    r.onOpenCallback();
            }
            function a(n) {
                n.hasClass(e)
                    ? n.addClass(h)
                    : n.hasClass(v)
                    ? n.addClass(o)
                    : n.hasClass(f) && n.addClass(s);
            }
            function l(n) {
                return n.hasClass(s) || n.hasClass(h) || n.hasClass(o)
                    ? !0
                    : !1;
            }
            function p() {
                var n = $(t),
                    r = $(i);
                a(n), a(r);
            }
            function w() {
                var u = $(t),
                    r = $(i),
                    n = s + " " + h + " " + o;
                u.removeClass(n), r.removeClass(n);
            }
            function b() {
                if (n.isOpen) {
                    var i = $(t);
                    i.click();
                }
            }
            function k() {
                var n = $(i);
                n.click();
            }
            function r(t) {
                (n.isOpen = !1),
                    typeof t != "undefined"
                        ? $.modal.close(t)
                        : $.modal.close(),
                    $("#rbx-body").removeClass("modal-mask");
            }
            function c(n) {
                r(), typeof n == "function" && n();
            }
            function y(n) {
                if (typeof n == "function") {
                    var t = n();
                    if (t !== "undefined" && t == !1) return !1;
                }
                r();
            }
            function tt(n, t) {
                var i = $(".modal-body");
                n
                    ? (i.find(".modal-btns").hide(),
                      i.find(".modal-processing").show())
                    : (i.find(".modal-btns").show(),
                      i.find(".modal-processing").hide()),
                    typeof t != "undefined" &&
                        t !== "" &&
                        $.modal.close("." + t);
            }
            var v = "btn-primary-md",
                f = "btn-secondary-md",
                e = "btn-control-md",
                o = "btn-primary-md disabled",
                s = "btn-secondary-md disabled",
                h = "btn-control-md disabled",
                g = "btn-none",
                t = ".modal-btns #confirm-btn",
                i = ".modal-btns #decline-btn",
                n = { isOpen: !1 },
                u = {
                    overlayClose: !0,
                    escClose: !0,
                    opacity: 80,
                    zIndex: 1040,
                    overlayCss: { backgroundColor: "#000" },
                    onClose: d,
                    focus: !1,
                };
            return {
                open: nt,
                close: r,
                disableButtons: p,
                enableButtons: w,
                clickYes: b,
                clickNo: k,
                status: n,
                toggleProcessing: tt,
                green: v,
                blue: f,
                white: e,
                none: g,
            };
        })()),
    $(document).keypress(function (n) {
        Roblox.Dialog.isOpen && n.which === 13 && Roblox.Dialog.clickYes();
    });
