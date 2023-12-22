// bundle: page___47d005a3a226abc2c25e8f21f4aa0313_m
// files: FormValidator.js, SignupFormValidatorGeneric.js, Landing/RollerCoaster/RollerCoaster.js, Bootstrap/CaptchaModal.js, Bootstrap/GenericConfirmation.js, Login/SignupOrLoginContainer.js, Login/SignupOrLogIn.js, Tracking/FormEvents.js, ~/viewapp/common/formEvents/formEvents.js, ~/viewapp/common/formEvents/directives/formInteraction.js, ~/viewapp/common/formEvents/directives/formContext.js, ~/viewapp/common/formEvents/directives/formValidation.js, ~/viewapp/common/formEvents/directives/formValidationRedactInput.js, ~/viewapp/common/signupOrLogin/signupOrLogin.js, ~/viewapp/common/signupOrLogin/controllers/captchaController.js, ~/viewapp/common/signupOrLogin/controllers/loginController.js, ~/viewapp/common/signupOrLogin/controllers/signupController.js, ~/viewapp/common/signupOrLogin/controllers/signupOrLoginController.js, ~/viewapp/common/signupOrLogin/directives/showSection.js, ~/viewapp/common/signupOrLogin/directives/validBirthday.js, ~/viewapp/common/signupOrLogin/directives/validPassword.js, ~/viewapp/common/signupOrLogin/directives/validPasswordConfirm.js, ~/viewapp/common/signupOrLogin/directives/validUsername.js, ~/viewapp/common/signupOrLogin/services/captchaService.js, ~/viewapp/common/signupOrLogin/services/displayService.js, ~/viewapp/common/signupOrLogin/services/loginService.js, ~/viewapp/common/signupOrLogin/services/signupService.js

// FormValidator.js
typeof Roblox == "undefined" && (Roblox = {}),
    (Roblox.FormValidator = (function () {
        function n(n) {
            var i = $(n).data("regex"),
                r = $(n).val();
            return t(r, i);
        }
        function t(n, t) {
            if (typeof n == "undefined" || typeof t == "undefined") return !1;
            var i = new RegExp(t, "i");
            return i.test(n);
        }
        return { validateElementRegex: n };
    })()); // SignupFormValidatorGeneric.js

typeof Roblox == "undefined" && (Roblox = {}),
    (Roblox.SignupFormValidatorGeneric = (function () {
        function it(n, t, i) {
            return (
                i <= 0 || n <= 0 || t <= 0 || t > new Date(i, n, 0).getDate()
            );
        }
        function r(n, t, i) {
            return i != 0 && n != 0 && t != 0;
        }
        function tt(n, t) {
            return $(n).length != 0 || $(t).length != 0;
        }
        function nt(n) {
            return n.length > 20;
        }
        function g(n) {
            return n.length < 3;
        }
        function d(n) {
            var t = n.length;
            if (n[0] == "_" || n[t - 1] == "_") return !0;
        }
        function k(n) {
            return n.split("_").length > 2;
        }
        function b(n) {
            var t = n.indexOf(" ") != -1,
                i =
                    v2UsernameAndPasswordRulesEnabled == 1
                        ? /^[a-zA-Z0-9_]*$/
                        : /^[a-zA-Z0-9]*$/;
            return (t = t || !n.match(i));
        }
        function w(t) {
            n++;
            var i = n,
                r = function (t) {
                    if (i == n) {
                        if (t.data == 1) return 1;
                        if (t.data == 2) return 2;
                        if (t.data == 0) return 0;
                    }
                },
                u = function () {};
            $.ajax({
                type: "GET",
                url: "/UserCheck/checkifinvalidusernameforsignup?username=" + t,
                success: r,
                error: u,
            });
        }
        function p(n, t) {
            return t == "" || (n.length > 0 && t != "" && n == t);
        }
        function rt(n) {
            return n.length < 8;
        }
        function v(n) {
            return n.length > 20;
        }
        function a(n) {
            return n.length < 6;
        }
        function l(n) {
            return u(n) > 3;
        }
        function c(n) {
            return y(n) > 1;
        }
        function h(n) {
            return f(n) > 0;
        }
        function s(n, t) {
            return n == t;
        }
        function o(n) {
            var t = [
                "roblox123",
                "password",
                "password1",
                "password12",
                "password123",
                "trustno1",
                "iloveyou",
                "princess",
                "abcd1234",
                "qwertyui",
                "qwerty",
                "football",
                "baseball",
                "michael",
                "jennifer",
                "michelle",
                "babygirl",
                "superman",
                "12345678",
                "123456789",
                "1234567890",
                "123123123",
                "69696969",
                "11111111",
                "22222222",
                "33333333",
                "44444444",
                "55555555",
                "66666666",
                "77777777",
                "88888888",
                "99999999",
                "00000000",
            ];
            for (n = n.toLowerCase(), i = 0; i < t.length; i++)
                if (n === t[i]) return !0;
            return /^[\s]*$/.test(n) ? !0 : !1;
        }
        function e(n) {
            return ((n = n.toLowerCase()), n.indexOf("asdf") > -1)
                ? !0
                : n.indexOf("pass") > -1 ||
                  n.indexOf("qwer") > -1 ||
                  n.indexOf("zxcv") > -1 ||
                  n.indexOf("aaaa") > -1 ||
                  n.indexOf("zzzz") > -1
                ? !0
                : /^[\s]*$/.test(n)
                ? !0
                : !1;
        }
        function f(n) {
            var r = /^\s$/,
                i = 0,
                t;
            if (n == null || n == "") return 0;
            for (t = 0; t < n.length; t++) n.charAt(t).match(r) && (i += 1);
            return i;
        }
        function u(n) {
            var r = /^[A-Za-z]$/,
                i = 0,
                t;
            if (n == null || n == "") return 0;
            for (t = 0; t < n.length; t++) n.charAt(t).match(r) && (i += 1);
            return i;
        }
        function y(n) {
            var r = /^[0-9]$/,
                i = 0,
                t;
            if (n == null || n == "") return 0;
            for (t = 0; t < n.length; t++) n.charAt(t).match(r) && (i += 1);
            return i;
        }
        var n, t;
        return (
            (v2UsernameAndPasswordRulesEnabled = parseInt(
                $(".new-username-pwd-rule").attr(
                    "data-v2-username-password-rules-enabled"
                )
            )),
            (n = 0),
            (t = {
                invalidBirthday: it,
                selectedBirthday: r,
                genderSelected: tt,
                usernameTooLong: nt,
                usernameTooShort: g,
                usernameRegexInvalid: b,
                usernameInvalid: w,
                usernameStartsOrEndsWithUnderscore:
                    v2UsernameAndPasswordRulesEnabled == 1 ? d : null,
                usernameHasMoreThanOneUnderscore:
                    v2UsernameAndPasswordRulesEnabled == 1 ? k : null,
                passwordIsUsername: s,
                passwordsMatch: p,
                weakPassword: v2UsernameAndPasswordRulesEnabled == 1 ? o : e,
                passwordTooShort:
                    v2UsernameAndPasswordRulesEnabled == 1 ? rt : a,
                passwordTooLong:
                    v2UsernameAndPasswordRulesEnabled == 1 ? null : v,
                passwordEnoughLetters:
                    v2UsernameAndPasswordRulesEnabled == 1 ? null : l,
                passwordEnoughNumbers:
                    v2UsernameAndPasswordRulesEnabled == 1 ? null : c,
                passwordContainsSpaces:
                    v2UsernameAndPasswordRulesEnabled == 1 ? null : h,
            })
        );
    })()),
    typeof Roblox.Resources == "undefined" && (Roblox.Resources = {}),
    typeof Roblox.Resources.AnimatedSignupFormValidator == "undefined" &&
    v2UsernameAndPasswordRulesEnabled == 1
        ? (Roblox.Resources.AnimatedSignupFormValidator = {
              doesntMatch: "Passwords don't match",
              requiredField: "Required",
              userNameRange: "Usernames can be 3 to 20 characters long",
              tooShort: "Must be at least 8 characters long",
              maxValid: "Too many accounts use this email",
              weakKey: "Please create a more complex password",
              invalidCharacters:
                  "Spaces and special characters are not allowed.",
              invalidName: "Can't be your avatar name",
              alreadyTaken: "This username is already in use.",
              cantBeUsed: "Username not appropriate for ROBLOX",
              invalidBirthday: "Invalid birthday",
              loginFieldsRequired: "Username and Password are required",
              loginFieldsIncorrect: "Your username or password is incorrect.",
              invalidEmail: "Invalid email",
              passwordIsUsername: "Password shouldn't match username",
              startsOrEndsWithUnderscore: "Username can’t start or end with _",
              moreThanOneUnderscore: "Usernames can have at most one _",
          })
        : typeof Roblox.Resources.AnimatedSignupFormValidator == "undefined" &&
          (Roblox.Resources.AnimatedSignupFormValidator = {
              doesntMatch: "Passwords don't match",
              requiredField: "Required",
              tooLong: "Too long",
              tooShort: "Too short",
              maxValid: "Too many accounts use this email",
              needsFourLetters: "Needs 4 letters",
              needsTwoNumbers: "Needs 2 numbers",
              noSpaces: "No spaces allowed",
              weakKey: "Weak key combination.",
              invalidCharacters:
                  "Spaces and special characters are not allowed.",
              invalidName: "Can't be your avatar name",
              alreadyTaken: "Already taken",
              cantBeUsed: "Can't be used",
              invalidBirthday: "Invalid birthday",
              loginFieldsRequired: "Username and Password are required.",
              loginFieldsIncorrect: "Your username or password is incorrect.",
              invalidEmail: "Invalid email",
              passwordIsUsername: "Password shouldn't match username.",
          }); // Landing/RollerCoaster/RollerCoaster.js

function MoveMagicLine(n) {
    "use strict";
    var t = $("#magic-line");
    if (t.length != 0 && (!t.is(":animated") || n)) {
        var i = 0,
            r = 0,
            u = $(document).scrollTop();
        if (
            u <
            $("#WhatsRobloxContainer").offset().top -
                $(".navbar-landing").height()
        ) {
            if (
                ((i = $("#PlayLink").position().left),
                (r = $("#PlayLink").width()),
                t.data("curtab") == 1 && !n)
            )
                return;
            t.data("curtab", 1);
        } else if (
            u <
            $("#RobloxDeviceText").offset().top - $(".navbar-landing").height()
        ) {
            if (
                ((i = $("#AboutLink").position().left),
                (r = $("#AboutLink").width()),
                t.data("curtab") == 2 && !n)
            )
                return;
            t.data("curtab", 2);
        } else {
            if (
                ((i = $("#PlatformLink").position().left),
                (r = $("#PlatformLink").width()),
                t.data("curtab") == 3 && !n)
            )
                return;
            t.data("curtab", 3);
        }
        t.animate({ queue: "link-magic-line", left: i, width: r });
    }
}
function scrollTo(n, t) {
    "use strict";
    var f = $("#magic-line"),
        i = 0,
        r = 0,
        u;
    switch (n) {
        case 1:
            (i = $("#PlayLink").position().left), (r = $("#PlayLink").width());
            break;
        case 2:
            (i = $("#AboutLink").position().left),
                (r = $("#AboutLink").width());
            break;
        case 3:
            (i = $("#PlatformLink").position().left),
                (r = $("#PlatformLink").width());
    }
    return (
        f.animate({ left: i, width: r }),
        (u = $(t).offset().top),
        $("html, body").animate({ scrollTop: u }, 600),
        !1
    );
}
function validateLogin() {
    var n = $("#LoginUsername").val(),
        t = $("#LoginPassword").val();
    return (
        n
            ? $("#LoginUsernameParent").removeClass("has-error")
            : $("#LoginUsernameParent").addClass("has-error"),
        t
            ? $("#LoginPasswordParent").removeClass("has-error")
            : $("#LoginPasswordParent").addClass("has-error"),
        t && n
    );
}
$(function () {
    $("[autofocus]:not(:focus)").eq(0).focus();
    var n = !1,
        t = $(".navbar-landing");
    $(window).on("scroll touchmove", function () {
        var i = $(window).scrollTop(),
            r = i > 75 || n ? 0.85 : 0.35 + i / 150;
        t.css("background-color", "rgba(0,0,0," + r + ")");
    });
    $(window).on("resize", function () {
        MoveMagicLine(!0);
    });
    setInterval(MoveMagicLine, 400);
    $("#LandingNavbar").on("show.bs.collapse", function () {
        t.css("background-color", "rgba(0,0,0,0.85)"), (n = !0);
    });
    $("#LandingNavbar").on("hide.bs.collapse", function () {
        n = !1;
    });
    $("#LogInForm").submit(function (n) {
        validateLogin() || n.preventDefault();
    });
    $("#LogInForm").on(
        "keyup propertychange paste",
        "input[name]",
        validateLogin
    );
    Roblox.SignupOrLogin.init({
        onSignupSuccess: function () {
            var n = $("#SignUpFormContainer").data("return-url");
            typeof n == "string" && n.length > 0
                ? ((n += n.indexOf("?") === -1 ? "?" : "&"),
                  (n += "nu=true"),
                  (window.location.href = n))
                : (window.location.href = "/games?nu=true");
        },
        onLoginSuccess: function () {
            var n = $("#SignUpFormContainer").data("return-url");
            typeof n == "string" && n.length > 0
                ? (window.location.href = n)
                : window.location.reload();
        },
    });
}); // Bootstrap/CaptchaModal.js

(Roblox = Roblox || {}),
    (Roblox.Bootstrap = Roblox.Bootstrap || {}),
    (Roblox.Resources = Roblox.Resources || {}),
    (Roblox.Resources.CaptchaModal = {
        title: "Are you human?",
        message: "To finish, please verify that you are human.",
        captchaEmptyMessage:
            "The CAPTCHA field should not be empty, please fill it.",
        captchaErrorMessage:
            "The CAPTCHA you entered is invalid. Please try again.",
        finish: "Finish",
    }),
    (Roblox.Bootstrap.CaptchaModal = (function () {
        "use strict";
        function t(t) {
            function r() {
                i.hide(), i.appendTo(t);
            }
            function u() {
                Roblox.Bootstrap.GenericConfirmation.disableButtons(),
                    i.hide(),
                    i.appendTo(t),
                    i.removeClass("roblox-captcha-modal"),
                    t.submit();
            }
            function f() {
                var n = $("#BootstrapConfirmationModal"),
                    t;
                n.find("#roblox-decline-btn").hide(),
                    (t = n.find(".modal-body")),
                    i.appendTo(t),
                    i.show();
            }
            var i = t.find(n),
                e = t.find(n).data("captcha-valid");
            if (typeof Roblox.Bootstrap.GenericConfirmation == "undefined") {
                i.remove(), t.submit();
                return;
            }
            Roblox.Bootstrap.GenericConfirmation.open({
                titleText: Roblox.Resources.CaptchaModal.title,
                bodyContent: Roblox.Resources.CaptchaModal.message,
                acceptText: Roblox.Resources.CaptchaModal.finish,
                acceptColor: Roblox.Bootstrap.GenericConfirmation.green,
                allowHtmlContentInBody: !0,
                dismissable: !0,
                xToCancel: !0,
                isCaptchaValid: e == "False" ? !1 : !0,
                captchaErrorMessage:
                    Roblox.Resources.CaptchaModal.captchaErrorMessage,
                onAccept: u,
                onCancel: r,
                onOpenCallback: f,
            });
        }
        function i(t) {
            return t.find(n).length != 0;
        }
        function r(n) {
            return !n.hasClass("ng-invalid");
        }
        var n = ".roblox-captcha-modal";
        return { Create: t, FormNeedsCaptcha: i, FormIsValid: r };
    })()),
    $(function () {
        "use strict";
        $("form").submit(function (n) {
            var t = $(this);
            Roblox.Bootstrap.CaptchaModal.FormNeedsCaptcha(t) &&
                Roblox.Bootstrap.CaptchaModal.FormIsValid(t) &&
                (n.preventDefault(), Roblox.Bootstrap.CaptchaModal.Create(t));
        });
    }); // Bootstrap/GenericConfirmation.js

typeof Roblox == "undefined" && (Roblox = {}),
    (Roblox.Bootstrap = Roblox.Bootstrap || {}),
    typeof Roblox.Bootstrap.GenericConfirmation == "undefined" &&
        (Roblox.Bootstrap.GenericConfirmation = (function () {
            function ut(f) {
                var k = {
                        titleText: "",
                        bodyContent: "",
                        footerText: "",
                        acceptText: Roblox.Resources.GenericConfirmation.yes,
                        declineText: Roblox.Resources.GenericConfirmation.No,
                        acceptColor: l,
                        declineColor: c,
                        xToCancel: !1,
                        isCaptchaValid: !0,
                        captchaEmptyMessage:
                            Roblox.Resources.CaptchaModal.captchaEmptyMessage,
                        captchaErrorMessage: "",
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
                    },
                    y,
                    p,
                    v,
                    w,
                    b;
                (f = $.extend({}, k, f)),
                    (u.backdrop = f.dismissable ? !0 : "static"),
                    (u.keyboard = f.xToCancel),
                    (y = $(r)),
                    y.text(f.acceptText),
                    y.unbind(),
                    y.bind("click", function () {
                        return o(y)
                            ? !1
                            : $(d).val() == ""
                            ? (v.find(h).text(f.captchaEmptyMessage), !1)
                            : (f.fieldValidationRequired
                                  ? ft(f.onAccept)
                                  : n(f.onAccept),
                              !1);
                    }),
                    (p = $(t)),
                    p.html(f.declineText),
                    p.unbind(),
                    p.bind("click", function () {
                        return o(p) ? !1 : (n(f.onDecline), !1);
                    }),
                    (v = $(a)),
                    v.find(g).text(f.titleText),
                    f.imageUrl == null || f.imageUrl == ""
                        ? v.find(e).hide()
                        : (v.find(e).attr("src", f.imageUrl), v.show()),
                    f.allowHtmlContentInBody
                        ? v.find(s).html(f.bodyContent)
                        : v.find(s).text(f.bodyContent),
                    f.isCaptchaValid || v.find(h).text(f.captchaErrorMessage),
                    $.trim(f.footerText) == ""
                        ? v.find(i).hide()
                        : v.find(i).show(),
                    f.allowHtmlContentInFooter
                        ? v.find(i).html(f.footerText)
                        : v.find(i).text(f.footerText),
                    typeof v.modal == "function"
                        ? v.modal(u)
                        : v.bootstrapModal(u),
                    (w = $("#roblox-close-btn")),
                    w.unbind(),
                    w.bind("click", function () {
                        return n(f.onCancel), !1;
                    }),
                    f.xToCancel || w.hide(),
                    (b = $("#BootstrapConfirmationModal")),
                    b.off("click"),
                    b.click(function (t) {
                        if ($(t.target).closest(".modal-content").length == 0)
                            return n(f.onCancel()), !1;
                    }),
                    $(document).keyup(function (t) {
                        if (t.keyCode == 27) return n(f.onCancel), !1;
                    }),
                    typeof v.modal == "function"
                        ? v.modal("show")
                        : v.bootstrapModal("show"),
                    f.onOpenCallback();
            }
            function v(n) {
                n.attr("disabled", !0);
            }
            function o(n) {
                return n.attr("disabled") == !0;
            }
            function y() {
                var n = $(r),
                    i = $(t);
                v(n), v(i);
            }
            function p() {
                var u = $(r),
                    i = $(t),
                    n = it + " " + tt + " " + rt;
                u.removeClass(n), i.removeClass(n);
            }
            function w() {
                var n = $(r);
                n.click();
            }
            function b() {
                var n = $(t);
                n.click();
            }
            function f() {
                var n = $(a);
                typeof n.modal == "function"
                    ? n.modal("hide")
                    : n.bootstrapModal("hide");
            }
            function n(n) {
                f(), typeof n == "function" && n();
            }
            function ft(n) {
                if (typeof n == "function") {
                    var t = n();
                    if (t !== "undefined" && t == !1) return !1;
                }
                f();
            }
            var k = "btn-primary",
                l = "btn-neutral",
                c = "btn-negative",
                rt = "btn-disabled-primary",
                it = "btn-disabled-neutral",
                tt = "btn-disabled-negative",
                nt = "btn-none",
                r = "#roblox-confirm-btn",
                t = "#roblox-decline-btn",
                a = "[data-modal-handle='bootstrap-confirmation']",
                g = ".modal-title",
                s = ".modal-body-text",
                d = "#recaptcha_response_field",
                h = "#roblox-captcha-error",
                i = "div.ConfirmationModalFooter",
                e = "img.GenericModalImage",
                u = { backdrop: !0, keyboard: !0 };
            return {
                open: ut,
                close: f,
                disableButtons: y,
                enableButtons: p,
                clickYes: w,
                clickNo: b,
                green: k,
                blue: l,
                gray: c,
                none: nt,
            };
        })()); // Login/SignupOrLoginContainer.js

typeof Roblox == "undefined" && (Roblox = {}),
    typeof Roblox.SignupOrLoginContainer == "undefined" &&
        (Roblox.SignupOrLoginContainer = (function () {
            function n() {
                $(".login-header").hide(),
                    $(".signup-header").hide(),
                    $(".two-step-header").hide();
            }
            function t() {
                $(document).on("authFormToggle", function (t, i) {
                    switch (i.toSectionType) {
                        case Roblox.SignupOrLogin.SectionType.login:
                            n(), $(".login-header").show();
                            break;
                        case Roblox.SignupOrLogin.SectionType.signup:
                            n(), $(".signup-header").show();
                    }
                });
            }
            return { Init: t };
        })()),
    $(function () {
        Roblox.SignupOrLoginContainer.Init();
    }); // Login/SignupOrLogIn.js

typeof Roblox == "undefined" && (Roblox = {}),
    typeof Roblox.SignupOrLogin == "undefined" &&
        (Roblox.SignupOrLogin = (function () {
            var r = { unknown: 1, male: 2, female: 3 },
                u = { signup: 0, login: 1 },
                f = { signup: 0, login: 1, captcha: 2, twostep: 3 },
                n,
                t,
                e = function (t) {
                    typeof n == "function" && n(t);
                },
                o = function (n) {
                    typeof t == "function" && t(n);
                },
                i = function (n) {
                    n.data("params", {});
                },
                s = function (r) {
                    typeof r.onSignupSuccess == "function" &&
                        (n = r.onSignupSuccess),
                        typeof r.onLoginSuccess == "function" &&
                            (t = r.onLoginSuccess),
                        i($(".signup-or-log-in"));
                },
                h = function (n, t, i) {
                    var r = n.data("params");
                    typeof r == "undefined" && (r = {}),
                        (r[t] = { name: t, value: i }),
                        n.data("params", r);
                };
            return {
                GenderType: r,
                SectionType: f,
                CaptchaFlowType: u,
                addSignupParam: h,
                onLoginSuccess: o,
                onSignupSuccess: e,
                resetParams: i,
                init: s,
            };
        })()),
    (Roblox.Animated2014SignupFormValidator = (function () {
        "use strict";
        function n(n) {
            var t = "";
            return (
                Roblox.SignupFormValidatorGeneric.usernameTooLong(n) &&
                    (t = Roblox.Resources.AnimatedSignupFormValidator
                        .userNameRange
                        ? Roblox.Resources.AnimatedSignupFormValidator
                              .userNameRange
                        : Roblox.Resources.AnimatedSignupFormValidator.tooLong),
                Roblox.SignupFormValidatorGeneric.usernameTooShort(n) &&
                    (t = Roblox.Resources.AnimatedSignupFormValidator
                        .userNameRange
                        ? Roblox.Resources.AnimatedSignupFormValidator
                              .userNameRange
                        : Roblox.Resources.AnimatedSignupFormValidator
                              .tooShort),
                Roblox.SignupFormValidatorGeneric.usernameRegexInvalid(n) &&
                    (t =
                        Roblox.Resources.AnimatedSignupFormValidator
                            .invalidCharacters),
                Roblox.SignupFormValidatorGeneric
                    .usernameStartsOrEndsWithUnderscore &&
                    Roblox.SignupFormValidatorGeneric.usernameStartsOrEndsWithUnderscore(
                        n
                    ) &&
                    (t =
                        Roblox.Resources.AnimatedSignupFormValidator
                            .startsOrEndsWithUnderscore),
                Roblox.SignupFormValidatorGeneric
                    .usernameHasMoreThanOneUnderscore &&
                    Roblox.SignupFormValidatorGeneric.usernameHasMoreThanOneUnderscore(
                        n
                    ) &&
                    (t =
                        Roblox.Resources.AnimatedSignupFormValidator
                            .moreThanOneUnderscore),
                t
            );
        }
        function t(n, t) {
            var i = "";
            return (
                Roblox.SignupFormValidatorGeneric.passwordTooLong &&
                Roblox.SignupFormValidatorGeneric.passwordTooLong(n)
                    ? (i = Roblox.Resources.AnimatedSignupFormValidator.tooLong)
                    : Roblox.SignupFormValidatorGeneric.passwordTooShort(n)
                    ? (i =
                          Roblox.Resources.AnimatedSignupFormValidator.tooShort)
                    : (Roblox.SignupFormValidatorGeneric
                          .passwordEnoughLetters &&
                          !Roblox.SignupFormValidatorGeneric.passwordEnoughLetters(
                              n
                          ) &&
                          (i =
                              Roblox.Resources.AnimatedSignupFormValidator
                                  .needsFourLetters),
                      Roblox.SignupFormValidatorGeneric.passwordEnoughNumbers &&
                          !Roblox.SignupFormValidatorGeneric.passwordEnoughNumbers(
                              n
                          ) &&
                          (i =
                              Roblox.Resources.AnimatedSignupFormValidator
                                  .needsTwoNumbers),
                      Roblox.SignupFormValidatorGeneric
                          .passwordContainsSpaces &&
                          Roblox.SignupFormValidatorGeneric.passwordContainsSpaces(
                              n
                          ) &&
                          (i =
                              Roblox.Resources.AnimatedSignupFormValidator
                                  .noSpaces),
                      Roblox.SignupFormValidatorGeneric.passwordIsUsername &&
                          Roblox.SignupFormValidatorGeneric.passwordIsUsername(
                              n,
                              t
                          ) &&
                          (i =
                              Roblox.Resources.AnimatedSignupFormValidator
                                  .passwordIsUsername)),
                Roblox.SignupFormValidatorGeneric.weakPassword(n) &&
                    (i = Roblox.Resources.AnimatedSignupFormValidator.weakKey),
                i
            );
        }
        return { verifyUsername: n, verifyPassword: t };
    })()); // Tracking/FormEvents.js

typeof Roblox == "undefined" && (Roblox = {}),
    typeof Roblox.FormEvents == "undefined" &&
        (Roblox.FormEvents = (function () {
            function n(n, t, i) {
                Roblox.EventStream && Roblox.EventStream.SendEvent(n, t, i);
            }
            function t(t, i, r, u) {
                var f = { msg: u, input: r, field: i, vis: !0 };
                n("formValidation", t, f);
            }
            function i(t, i) {
                var r = { aType: "focus", field: i };
                n("formInteraction", t, r);
            }
            function r(t, i) {
                var r = { aType: "offFocus", field: i };
                n("formInteraction", t, r);
            }
            function u(t, i) {
                var r = { aType: "click", field: i };
                n("formInteraction", t, r);
            }
            return {
                SendValidationFailed: t,
                SendInteractionFocus: i,
                SendInteractionOffFocus: r,
                SendInteractionClick: u,
            };
        })()); // ~/viewapp/common/formEvents/formEvents.js

("use strict");
var formEvents = angular.module("roblox.formEvents", []); // ~/viewapp/common/formEvents/directives/formInteraction.js

("use strict");
formEvents.directive("rbxFormInteraction", function () {
    return {
        require: "^form",
        restrict: "A",
        link: function (n, t, i, r) {
            t.bind("blur", function () {
                Roblox.FormEvents &&
                    Roblox.FormEvents.SendInteractionOffFocus(
                        r.context,
                        angular.element(this).attr("name")
                    );
            }).bind("focus", function () {
                Roblox.FormEvents &&
                    Roblox.FormEvents.SendInteractionFocus(
                        r.context,
                        angular.element(this).attr("name")
                    );
            });
        },
    };
}); // ~/viewapp/common/formEvents/directives/formContext.js

("use strict");
formEvents.directive("rbxFormContext", function () {
    return {
        require: "form",
        restrict: "A",
        link: function (n, t, i, r) {
            var u = r.$name;
            r.context = i.context + u.charAt(0).toUpperCase() + u.substr(1);
        },
    };
}); // ~/viewapp/common/formEvents/directives/formValidation.js

("use strict");
formEvents.directive("rbxFormValidation", function () {
    return {
        require: ["^form", "ngModel"],
        restrict: "A",
        link: function (n, t, i, r) {
            n.$watch(
                function () {
                    var n = r[1];
                    return n.$modelValue;
                },
                function (t) {
                    var i = r[1],
                        f = r[0],
                        u;
                    (n.badSubmit || i.$dirty) &&
                        i.$invalid &&
                        ((u = i.redactedInput ? "[Redacted]" : t),
                        Roblox.FormEvents &&
                            Roblox.FormEvents.SendValidationFailed(
                                f.context,
                                i.$name,
                                u,
                                i.$validationMessage
                            ));
                }
            );
        },
    };
}); // ~/viewapp/common/formEvents/directives/formValidationRedactInput.js

("use strict");
formEvents.directive("rbxFormValidationRedactInput", function () {
    return {
        require: "ngModel",
        restrict: "A",
        link: function (n, t, i, r) {
            r.redactedInput = !0;
        },
    };
}); // ~/viewapp/common/signupOrLogin/signupOrLogin.js

("use strict");
var signupOrLogin = angular.module("SignupOrLogin", [
    "roblox.formEvents",
    "robloxApp.helpers",
]); // ~/viewapp/common/signupOrLogin/controllers/captchaController.js

("use strict");
signupOrLogin.controller("CaptchaController", [
    "$scope",
    "$http",
    "$rootElement",
    "captchaService",
    "displayService",
    function (n, t, i, r, u) {
        var f = function () {
            Recaptcha.reload();
        };
        (n.isSubmitting = !1),
            (n.submitCaptcha = function (t) {
                r.submitCaptcha(t, f, n);
            }),
            (n.isSectionShown = !1),
            n.$on("display:updated", function (t, i) {
                (n.$validationMessage = ""),
                    (n.isSectionShown =
                        i === Roblox.SignupOrLogin.SectionType.captcha);
            }),
            (n.captchaFlowType = Roblox.SignupOrLogin.CaptchaFlowType.signup),
            n.$on("captcha:loaded", function (t, i) {
                (n.captchaResponse = ""),
                    (n.captchaFlowType = i.captchaFlow),
                    (n.username = i.username),
                    f(),
                    u.setDisplayState(Roblox.SignupOrLogin.SectionType.captcha),
                    (n.isSectionShown = !0),
                    Roblox.SignupOrLoginIframe &&
                        Roblox.SignupOrLoginIframe.resizeFrame(
                            Roblox.SignupOrLogin.SectionType.captcha
                        );
            });
    },
]); // ~/viewapp/common/signupOrLogin/controllers/loginController.js

("use strict");
signupOrLogin.controller("LoginController", [
    "$scope",
    "displayService",
    "captchaService",
    "loginService",
    function (n, t, i, r) {
        var u, f;
        (n.login = {}),
            (n.badSubmit = !1),
            (n.submitLogin = function (t) {
                if (n.loginForm.$invalid) {
                    t.preventDefault(),
                        (n.badSubmit = !0),
                        (n.loginForm.username.$validationMessage =
                            "Username is required."),
                        (n.loginForm.password.$validationMessage =
                            "Password is required.");
                    return;
                }
                (n.loginForm.username.showValidation = !1),
                    (n.loginForm.password.showValidation = !1),
                    (n.badSubmit = !1),
                    r.executeLogin(n);
            }),
            (u = 13),
            (n.enterLogin = function (t) {
                t.which == u && n.submitLogin(t);
            }),
            (n.requestTwoStepCode = function () {
                r.requestTwoStepCode(n);
            }),
            (n.enterTwoStepCode = function (t) {
                t.which == u && n.submitTwoStepCode(t);
            }),
            (n.submitTwoStepCode = function (t) {
                if (
                    (n.twoStepVerificationForm.twoStepCode.$setValidity(
                        "twostep",
                        !0
                    ),
                    n.twoStepVerificationForm.$invalid || n.loginForm.$invalid)
                ) {
                    t.preventDefault(), (n.badSubmit = !0);
                    return;
                }
                r.submitTwoStepCode(t, n);
            }),
            (f = angular
                .element(".signup-or-log-in")
                .data("is-login-default-section")),
            (n.isSectionShown = f),
            (n.isTwoStepSectionShown = !1),
            n.$on("display:updated", function (t, i) {
                (n.isSectionShown =
                    i === Roblox.SignupOrLogin.SectionType.login),
                    (n.isTwoStepSectionShown =
                        i === Roblox.SignupOrLogin.SectionType.twostep),
                    n.isSectionShown &&
                        (Roblox.SignupOrLoginIframe &&
                            Roblox.SignupOrLoginIframe.resizeFrame(
                                Roblox.SignupOrLogin.SectionType.login
                            ),
                        Roblox.SignupOrLoginModal &&
                            Roblox.SignupOrLoginModal.resizeModal(
                                Roblox.SignupOrLogin.SectionType.login
                            ),
                        (n.badSubmit = !1),
                        (n.login = {}),
                        (n.twoStepVerification = {}),
                        (n.isSubmitting = !1),
                        n.loginForm.$setPristine(),
                        (n.$generalError = !1),
                        n.twoStepVerificationForm &&
                            ((n.twoStepVerificationForm.twoStepCode.$validationMessage =
                                ""),
                            n.twoStepVerificationForm.$setPristine()));
            }),
            n.$on("captcha:loginSuccess", function () {
                r.executeLogin(n);
            });
    },
]); // ~/viewapp/common/signupOrLogin/controllers/signupController.js

("use strict");
signupOrLogin.controller("SignupController", [
    "$scope",
    "$http",
    "displayService",
    "captchaService",
    "signupService",
    function (n, t, i, r, u) {
        (n.signup = {}),
            (n.signup.gender = Roblox.SignupOrLogin.GenderType.unknown),
            (n.setGender = function (t, i) {
                (n.signup.gender = i), t.preventDefault();
            }),
            (n.showBirthdayValidation = function () {
                return (
                    (n.badSubmit ||
                        (n.signupForm.birthdayMonth.$dirty &&
                            n.signupForm.birthdayDay.$dirty &&
                            n.signupForm.birthdayYear.$dirty)) &&
                    (!n.isValidBirthday(n.signup.birthdayDay) ||
                        n.signupForm.birthdayYear.$invalid)
                );
            }),
            (n.isValidBirthday = function (t) {
                var u = n.signup.birthdayYear ? n.signup.birthdayYear : "2014",
                    f = n.signup.birthdayMonth ? n.signup.birthdayMonth : 1,
                    i = new Date(f + " " + t + " " + u),
                    r;
                return Object.prototype.toString.call(i) !== "[object Date]" ||
                    isNaN(i.getTime())
                    ? !1
                    : i.getDate().toString() != t
                    ? !1
                    : ((r = new Date()),
                      i.getTime() < r.getTime() &&
                          i.getFullYear() > r.getFullYear() - 100);
            }),
            (n.badSubmit = !1),
            (n.isSubmitting = !1),
            (n.submitSignup = function () {
                if (
                    n.signupForm.$valid &&
                    n.signup.gender !==
                        Roblox.SignupOrLogin.GenderType.unknown &&
                    n.isValidBirthday(n.signup.birthdayDay)
                )
                    n.badSubmit = !1;
                else {
                    n.badSubmit = !0;
                    return;
                }
                (n.isSubmitting = !0), u.submitSignup(n);
            });
        var f = angular
            .element(".signup-or-log-in")
            .data("is-login-default-section");
        (n.isSectionShown = f === !1),
            n.$on("display:updated", function (t, i) {
                (n.isSectionShown =
                    i === Roblox.SignupOrLogin.SectionType.signup),
                    n.isSectionShown &&
                        (Roblox.SignupOrLoginIframe &&
                            Roblox.SignupOrLoginIframe.resizeFrame(
                                Roblox.SignupOrLogin.SectionType.signup
                            ),
                        Roblox.SignupOrLoginModal &&
                            Roblox.SignupOrLoginModal.resizeModal(
                                Roblox.SignupOrLogin.SectionType.signup
                            ),
                        (n.signup = {}),
                        (n.badSubmit = !1),
                        n.signupForm.$setPristine(),
                        (n.signupForm.$generalError = !1));
            }),
            n.$on("captcha:signupSuccess", function () {
                u.submitSignup(n);
            });
    },
]); // ~/viewapp/common/signupOrLogin/controllers/signupOrLoginController.js

("use strict");
signupOrLogin.controller("SignupOrLoginController", [
    "$document",
    "$rootScope",
    "displayService",
    function (n, t, i) {
        n.on("display:updated", function (n, r) {
            i.setDisplayState(r), t.$apply();
        });
    },
]); // ~/viewapp/common/signupOrLogin/directives/showSection.js

("use strict");
signupOrLogin.directive("rbxShowSection", [
    "$rootScope",
    "displayService",
    function (n, t) {
        return {
            restrict: "A",
            scope: { sectionType: "=" },
            link: function (i, r) {
                r.bind("click", function () {
                    var u = t.getDisplayState(),
                        r;
                    t.setDisplayState(i.sectionType),
                        n.$apply(),
                        Roblox.EventStream &&
                            ((r = {
                                nodeName: this.nodeName,
                                toSectionType: i.sectionType,
                                fromSectionType: u,
                            }),
                            Roblox.EventStream.SendEvent(
                                "formSectionToggle",
                                "authForm",
                                r
                            ));
                });
            },
        };
    },
]); // ~/viewapp/common/signupOrLogin/directives/validBirthday.js

("use strict");
signupOrLogin.directive("rbxValidBirthday", function () {
    return {
        require: "ngModel",
        link: function (n, t, i, r) {
            n.$watch(
                function () {
                    return (
                        !angular.isUndefined(r.$modelValue) &&
                        r.$modelValue !== ""
                    );
                },
                function (n) {
                    r.$setValidity("birthday", n),
                        (r.$validationMessage = "Invalid birthday");
                }
            );
        },
    };
}); // ~/viewapp/common/signupOrLogin/directives/validPassword.js

("use strict");
signupOrLogin.directive("rbxValidPassword", function () {
    return {
        require: "ngModel",
        link: function (n, t, i, r) {
            n.$watch(
                function () {
                    return (
                        !angular.isUndefined(r.$modelValue) &&
                        Roblox.Animated2014SignupFormValidator.verifyPassword(
                            r.$modelValue,
                            n.signup.username
                        )
                    );
                },
                function (t) {
                    r.$setValidity(
                        "password",
                        angular.isString(r.$modelValue) && t === ""
                    ),
                        (r.$validationMessage = angular.isString(r.$modelValue)
                            ? t
                            : "Please enter a password."),
                        (n.$unitTestValidationMessage = r.$validationMessage);
                }
            );
        },
    };
}); // ~/viewapp/common/signupOrLogin/directives/validPasswordConfirm.js

("use strict");
signupOrLogin.directive("rbxValidPasswordConfirm", function () {
    return {
        require: "ngModel",
        restrict: "A",
        scope: { match: "=", name: "=" },
        link: function (n, t, i, r) {
            n.$watch(
                function () {
                    return n.match === r.$modelValue;
                },
                function (t) {
                    (r.$validationMessage = t
                        ? angular.isString(r.$modelValue)
                            ? ""
                            : "Please enter a password confirmation."
                        : Roblox.Resources.AnimatedSignupFormValidator
                              .doesntMatch),
                        (n.$unitTestValidationMessage = r.$validationMessage),
                        r.$setValidity(
                            "match",
                            angular.isString(r.$modelValue) && t
                        );
                }
            );
        },
    };
}); // ~/viewapp/common/signupOrLogin/directives/validUsername.js

("use strict");
signupOrLogin.directive("rbxValidUsername", [
    "$http",
    function (n) {
        return {
            require: "ngModel",
            link: function (t, i, r, u) {
                (t.signup.username = i.val()),
                    (t.usernameValidationRequestNum = 0),
                    (t.onChange = function () {
                        var e =
                                t.signup.username === "" ||
                                angular.isUndefined(t.signup.username),
                            i = "",
                            r = !1,
                            f = ++t.usernameValidationRequestNum;
                        f == 1 &&
                            t.signupForm.username &&
                            t.signup.username &&
                            (t.signupForm.username.$dirty = !0),
                            e
                                ? ((r = !0), (i = "Please enter a username."))
                                : ((i =
                                      Roblox.Animated2014SignupFormValidator.verifyUsername(
                                          t.signup.username
                                      )),
                                  i !== "" && (r = !0)),
                            u.$setValidity("validusername", !r),
                            r
                                ? (u.$validationMessage = i)
                                : ((u.$validationMessage = ""),
                                  n({
                                      method: "GET",
                                      url: "/UserCheck/checkifinvalidusernameforsignup",
                                      params: { username: t.signup.username },
                                  }).success(function (n) {
                                      if (f == t.usernameValidationRequestNum) {
                                          var r = !0,
                                              e = !0,
                                              i = "";
                                          n.data == 1 &&
                                              ((r = !1),
                                              (i =
                                                  Roblox.Resources
                                                      .AnimatedSignupFormValidator
                                                      .alreadyTaken)),
                                              n.data == 2 &&
                                                  ((e = !1),
                                                  (i =
                                                      Roblox.Resources
                                                          .AnimatedSignupFormValidator
                                                          .cantBeUsed)),
                                              u.$setValidity("unique", r),
                                              u.$setValidity("moderated", e),
                                              u.$invalid
                                                  ? i != "" &&
                                                    (u.$validationMessage = i)
                                                  : (u.$validationMessage = "");
                                      }
                                  }));
                    }),
                    t.$evalAsync(function () {
                        t.onChange();
                    });
            },
        };
    },
]); // ~/viewapp/common/signupOrLogin/services/captchaService.js

("use strict");
signupOrLogin.factory("captchaService", [
    "$rootScope",
    "$http",
    function (n, t) {
        var i = Roblox.SignupOrLogin.CaptchaFlowType.signup,
            u = function (n, u, f) {
                var s = angular.element(n.target),
                    e = angular.element(".signup-or-log-in .captcha-container"),
                    h = {
                        recaptcha_challenge_field: e
                            .find("#recaptcha_challenge_field")
                            .val(),
                        recaptcha_response_field: e
                            .find("#recaptcha_response_field")
                            .val(),
                        "g-Recaptcha-Response": e
                            .find("#g-recaptcha-response")
                            .val(),
                    },
                    o;
                if (
                    f.captchaFlowType ===
                    Roblox.SignupOrLogin.CaptchaFlowType.signup
                )
                    o = s.data("signup-captcha-api-url");
                else if (i === Roblox.SignupOrLogin.CaptchaFlowType.login)
                    (o = s.data("log-in-captcha-api-url")),
                        (h.username = f.username);
                else throw "Unknown Captcha flow";
                return (
                    (f.isSubmitting = !0),
                    t({
                        method: "POST",
                        url: o,
                        data: $.param(h),
                        headers: {
                            "Content-Type": "application/x-www-form-urlencoded",
                        },
                        crossDomain: !0,
                    })
                        .success(function () {
                            (f.isSubmitting = !1),
                                (f.$validationMessage = ""),
                                r();
                        })
                        .error(function (n, t) {
                            (f.isSubmitting = !1),
                                t === 403
                                    ? ((f.$validationMessage =
                                          "Captcha incorrect"),
                                      u())
                                    : ((f.$validationMessage = "Unknown error"),
                                      u());
                        })
                );
            },
            r = function () {
                i == Roblox.SignupOrLogin.CaptchaFlowType.signup
                    ? n.$broadcast("captcha:signupSuccess")
                    : i == Roblox.SignupOrLogin.CaptchaFlowType.login &&
                      n.$broadcast("captcha:loginSuccess");
            };
        return {
            getCaptchaFlowType: function () {
                return i;
            },
            setCaptchaFlowType: function (t, r) {
                i = t;
                var u = { captchaFlow: t };
                r && (u.username = r), n.$broadcast("captcha:loaded", u);
            },
            onAfterCaptchaSuccess: r,
            submitCaptcha: u,
        };
    },
]); // ~/viewapp/common/signupOrLogin/services/displayService.js

("use strict");
signupOrLogin.factory("displayService", [
    "$rootScope",
    "$document",
    function (n, t) {
        var i = Roblox.SignupOrLogin.SectionType.signup;
        return {
            getDisplayState: function () {
                return i;
            },
            setDisplayState: function (r) {
                (i = r),
                    n.$broadcast("display:updated", r),
                    t.triggerHandler("authFormToggle", { toSectionType: r });
            },
        };
    },
]); // ~/viewapp/common/signupOrLogin/services/loginService.js

("use strict");
signupOrLogin.factory("loginService", [
    "$http",
    "captchaService",
    "displayService",
    function (n, t, i) {
        var r = function (r) {
                var u = angular.element("#login-button"),
                    f = u.data("login-api-url");
                (r.isSubmitting = !0),
                    n({
                        method: "POST",
                        url: f,
                        data: $.param({
                            username: r.login.username,
                            password: r.login.password,
                        }),
                        headers: {
                            "Content-Type": "application/x-www-form-urlencoded",
                        },
                        crossDomain: !0,
                        withCredentials: !0,
                    })
                        .success(function (n) {
                            (r.$generalError = !1), (r.$generalErrorText = "");
                            Roblox.SignupOrLogin.onLoginSuccess(n.userId);
                        })
                        .error(function (n, u) {
                            u === 403
                                ? n.message === "Captcha"
                                    ? ((r.isSubmitting = !1),
                                      (r.isSectionShown = !1),
                                      i.setDisplayState(
                                          Roblox.SignupOrLogin.SectionType
                                              .captcha
                                      ),
                                      t.setCaptchaFlowType(
                                          Roblox.SignupOrLogin.CaptchaFlowType
                                              .login,
                                          r.login.username
                                      ))
                                    : n.message === "Privilege"
                                    ? ((r.isSubmitting = !1),
                                      (r.isSectionShown = !0),
                                      alert(
                                          "Sorry, privileged accounts can't log in from here."
                                      ))
                                    : n.message === "TwoStepVerification"
                                    ? r.requestTwoStepCode()
                                    : n.message === "LoggedIn"
                                    ? window.location.reload()
                                    : n.message === "Credentials"
                                    ? (i.getDisplayState() !==
                                          Roblox.SignupOrLogin.SectionType
                                              .login &&
                                          i.setDisplayState(
                                              Roblox.SignupOrLogin.SectionType
                                                  .login
                                          ),
                                      (r.isSubmitting = !1),
                                      (r.loginForm.username.$validationMessage =
                                          ""),
                                      (r.loginForm.username.showValidation =
                                          !0),
                                      (r.loginForm.password.$validationMessage =
                                          "Your credentials were incorrect."),
                                      (r.loginForm.password.showValidation =
                                          !0))
                                    : (i.getDisplayState() !==
                                          Roblox.SignupOrLogin.SectionType
                                              .login &&
                                          i.setDisplayState(
                                              Roblox.SignupOrLogin.SectionType
                                                  .login
                                          ),
                                      (r.isSubmitting = !1),
                                      (r.$generalError = !0),
                                      (r.$generalErrorText =
                                          "Sorry, an error occurred."))
                                : ((r.isSubmitting = !1),
                                  (r.$generalError = !0),
                                  (r.$generalErrorText =
                                      "Sorry, an error occurred."));
                        });
            },
            u = function (t) {
                var r = angular
                    .element("#login-button")
                    .data("two-step-code-request-url");
                n({
                    method: "POST",
                    url: r,
                    data: $.param({
                        actionType: 0,
                        username: t.login.username,
                        password: t.login.password,
                    }),
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded",
                    },
                    crossDomain: !0,
                    withCredentials: !0,
                })
                    .success(function () {
                        (t.isSubmitting = !1),
                            i.setDisplayState(
                                Roblox.SignupOrLogin.SectionType.twostep
                            );
                    })
                    .error(function () {
                        i.setDisplayState(
                            Roblox.SignupOrLogin.SectionType.login
                        ),
                            (t.isSubmitting = !1),
                            (t.$generalError = !0),
                            (t.$generalErrorText = "Sorry, an error occurred.");
                    });
            },
            f = function (t, i) {
                var f = angular
                    .element("#login-button")
                    .data("two-step-verification-api-url");
                (i.isSubmitting = !0),
                    n({
                        method: "POST",
                        url: f,
                        data: $.param({
                            actionType: 0,
                            code: i.twoStepVerification.twoStepCode,
                            username: i.login.username,
                            password: i.login.password,
                        }),
                        headers: {
                            "Content-Type": "application/x-www-form-urlencoded",
                        },
                        crossDomain: !0,
                        withCredentials: !0,
                    })
                        .success(function () {
                            r(i);
                        })
                        .error(function (n, t) {
                            (i.isSubmitting = !1),
                                t === 403
                                    ? n.message === "Credentials"
                                        ? ((i.$generalError = !0),
                                          (i.$generalErrorText =
                                              "Your credentials were incorrect."))
                                        : n.message === "Flooded"
                                        ? (i.twoStepVerificationForm.twoStepCode.$setValidity(
                                              "twostep",
                                              !1
                                          ),
                                          (i.twoStepVerificationForm.twoStepCode.$validationMessage =
                                              "Slow down! You've made too many attempts. Try again later."))
                                        : n.message === "InvalidCode"
                                        ? (i.twoStepVerificationForm.twoStepCode.$setValidity(
                                              "twostep",
                                              !1
                                          ),
                                          (i.twoStepVerificationForm.twoStepCode.$validationMessage =
                                              "Your code was incorrect. Try again."),
                                          u(i))
                                        : (i.twoStepVerificationForm.twoStepCode.$setValidity(
                                              "twostep",
                                              !1
                                          ),
                                          (i.twoStepVerificationForm.twoStepCode.$validationMessage =
                                              "Sorry, an error occurred."))
                                    : (i.twoStepVerificationForm.twoStepCode.$setValidity(
                                          "twostep",
                                          !1
                                      ),
                                      (i.twoStepVerificationForm.twoStepCode.$validationMessage =
                                          "Sorry, an error occurred."));
                        });
            };
        return { executeLogin: r, requestTwoStepCode: u, submitTwoStepCode: f };
    },
]); // ~/viewapp/common/signupOrLogin/services/signupService.js

("use strict");
signupOrLogin.factory("signupService", [
    "$http",
    "captchaService",
    "displayService",
    "$rootElement",
    function (n, t, i) {
        var u = function (r) {
                var s = angular.element("#signup-button"),
                    h = s.data("signup-api-url"),
                    u = {},
                    o = angular.element(".signup-or-log-in"),
                    e = o.data("params"),
                    f;
                typeof e == "undefined" && (e = {}),
                    $.each(e, function (n, t) {
                        u[n] = t;
                    }),
                    (f = o.data("metadata-params")),
                    typeof f == "undefined" && (f = {}),
                    $.each(f, function (n, t) {
                        u[n] = t;
                    }),
                    $.extend(u, {
                        username: r.signup.username,
                        password: r.signup.password,
                        birthday:
                            r.signup.birthdayDay +
                            " " +
                            r.signup.birthdayMonth +
                            " " +
                            r.signup.birthdayYear,
                        gender: r.signup.gender,
                        context: r.signupForm.context,
                    }),
                    n({
                        method: "POST",
                        url: h,
                        data: $.param(u),
                        headers: {
                            "Content-Type": "application/x-www-form-urlencoded",
                        },
                        crossDomain: !0,
                        withCredentials: !0,
                    })
                        .success(function (n) {
                            Roblox.SignupOrLogin.onSignupSuccess(n.userId);
                        })
                        .error(function (n, u) {
                            if (
                                ((r.badSubmit = !0),
                                (r.isSubmitting = !1),
                                u === 403)
                            ) {
                                var f = 0;
                                n.reasons.indexOf("Captcha") !== -1 &&
                                    ((r.isSubmitting = !1),
                                    (r.isSectionShown = !1),
                                    i.setDisplayState(
                                        Roblox.SignupOrLogin.SectionType.captcha
                                    ),
                                    t.setCaptchaFlowType(
                                        Roblox.SignupOrLogin.CaptchaFlowType
                                            .signup
                                    ),
                                    (f += 1)),
                                    n.reasons.indexOf("GenderInvalid") !== -1 &&
                                        ((r.signup.gender = 1), (f += 1)),
                                    n.reasons.indexOf("PasswordInvalid") !==
                                        -1 &&
                                        (r.signupForm.password.$setValidity(
                                            "password",
                                            !1
                                        ),
                                        (r.signupForm.password.$passwordMessage =
                                            "Password is invalid"),
                                        (f += 1)),
                                    n.reasons.indexOf("UsernameInvalid") !==
                                        -1 &&
                                        (r.signupForm.username.$setValidity(
                                            "validusername",
                                            !1
                                        ),
                                        (r.signupForm.username.$usernameMessage =
                                            "Username is invalid"),
                                        (f += 1)),
                                    n.reasons.indexOf("UsernameTaken") !== -1 &&
                                        (r.signupForm.username.$setValidity(
                                            "unique",
                                            !1
                                        ),
                                        (r.signupForm.username.$usernameMessage =
                                            "Username is taken"),
                                        (f += 1)),
                                    f < n.reasons.length &&
                                        ((r.signupForm.$generalError = !0),
                                        (r.signupForm.$generalErrorText =
                                            "Sorry, an error occurred."));
                            } else (r.signupForm.$generalError = !0), (r.signupForm.$generalErrorText = "Sorry, an error occurred.");
                        });
            },
            f = function (t) {
                var h = angular.element("#signup-button"),
                    c = h.data("signup-api-url"),
                    i = {},
                    e = angular.element(".signup-or-log-in"),
                    u = e.data("params"),
                    r;
                typeof u == "undefined" && (u = {}),
                    $.each(u, function (n, t) {
                        i[n] = t;
                    }),
                    (r = e.data("metadata-params")),
                    typeof r == "undefined" && (r = {}),
                    $.each(r, function (n, t) {
                        i[n] = t;
                    });
                var f = angular.element(".signup-or-log-in .captcha-container"),
                    o = "",
                    s = "";
                f.length &&
                    ((o = f.find("#recaptcha_challenge_field").val()),
                    (s = f.find("#recaptcha_response_field").val())),
                    $.extend(i, {
                        UserName: t.signup.username,
                        Birthday: angular.element("#BirthDayDate").val(),
                        Email: angular.element("#Email").val(),
                        Name: angular.element("#Name").val(),
                        FBToken: angular.element("#FbToken").val(),
                        GigyaUid: angular.element("#GigyaUID").val(),
                        ReturnTo: angular.element("#ReturnTo").val(),
                        IsGenderInputRequired: angular
                            .element("#IsGenderInputRequired")
                            .val(),
                        Gender: angular.element("#Gender").val(),
                        recaptcha_challenge_field: o,
                        recaptcha_response_field: s,
                    }),
                    n({
                        method: "POST",
                        url: c,
                        data: $.param(i),
                        headers: {
                            "Content-Type": "application/x-www-form-urlencoded",
                        },
                        crossDomain: !0,
                        withCredentials: !0,
                    })
                        .success(function (n) {
                            Roblox.SignupOrLogin.onSignupSuccess(n.userId);
                        })
                        .error(function (n, i) {
                            if (
                                ((t.badSubmit = !0),
                                (t.isSubmitting = !1),
                                i === 403)
                            ) {
                                var r = 0;
                                n.reasons.indexOf("Captcha") !== -1 &&
                                    ((t.isSubmitting = !1),
                                    (t.isSectionShown = !1),
                                    (t.isCaptchaSectionShown = !0),
                                    Recaptcha.reload(),
                                    (r += 1)),
                                    n.reasons.indexOf("UsernameInvalid") !==
                                        -1 &&
                                        (t.fbConnectForm.username.$setValidity(
                                            "validusername",
                                            !1
                                        ),
                                        (t.fbConnectForm.username.$usernameMessage =
                                            "Username is invalid"),
                                        (r += 1)),
                                    n.reasons.indexOf("UsernameTaken") !== -1 &&
                                        (t.fbConnectForm.username.$setValidity(
                                            "unique",
                                            !1
                                        ),
                                        (t.fbConnectForm.username.$usernameMessage =
                                            "Username is taken"),
                                        (r += 1)),
                                    r < n.reasons.length &&
                                        ((t.fbConnectForm.$generalError = !0),
                                        (t.fbConnectForm.$generalErrorText =
                                            "Sorry, an error occurred."));
                            } else (t.fbConnectForm.$generalError = !0), (t.fbConnectForm.$generalErrorText = "Sorry, an error occurred.");
                        });
            };
        return { submitSignup: u, socialSubmitSignup: f };
    },
]);
