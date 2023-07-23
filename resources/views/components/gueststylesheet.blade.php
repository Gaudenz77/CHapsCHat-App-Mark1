<style>
    body {
        font-family: 'IBM Plex Mono', monospace;
        /*  margin-top:10%; */
        /* margin-bottom:8vh; */
        /* font-family: 'Poppins', sans-serif; */
        /* font-family: 'Lexend', sans-serif; */
        /* font-family: 'Roboto', sans-serif; */
        /* font-family: 'Special Elite', cursive; */
    }

    @media (max-width: 480px) {

        .navbar {
            height: 7em;
            background-color: #091540;
        }

        .loginMain {
            margin-top: 121px;
            margin-bottom: 11vh;
        }

        .registerMain {
            margin-top: 125px;
            margin-bottom: 13vh;
        }

        .blogMain {
            margin-top: 7rem;
            margin-bottom: 7rem;
        }

        .aboutMain {
            margin-top: 7rem;
            margin-bottom: 7rem;
        }

        .colTriangle {
            /* left: 52%; */
        }

        .navbar-toggler {
            /* font-size:20px;
    margin-left:0rem;
    margin-right: 0rem;  */
        }

        .logoImg {
            display: none;
        }

        .wrapper {
            width: 16vh;
            padding-right: 8rem;
            padding-bottom: 3.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            position: relative;
            left: 0%;
            bottom: 0%;
        }

        .toggleOwn {
            height: 10%;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            height: 6.5rem;
            width: 100%;
            margin-top: 0;
            z-index: auto;
        }

        .span1 {
            height: 7rem;
            background-color: #091540;
        }

        body.dark-mode .span1 {
            height: 7rem;
            background-color: #ffffff;
        }

        .welcomeSmall {
            display: none;
        }
    }

    /* LANDSCAPE/TABLET MEDIA QUERIES START */

    @media (max-width: 810px) and (orientation: landscape) {

        /* CSS rules for mobile landscape mode */
        .registerMain {
            margin-top: 5rem;
            margin-bottom: 20rem;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            height: 7rem;
            width: 100%;
            margin-top: 0;
            z-index: auto;
        }

        .span1 {
            color: #ebebeb;
            background-color: #ffffff;
            height: 13vh;
        }

        body.dark-mode .span1 {
            color: #333;
            background-color: #091540;
            height: 13vh;
        }

        .indexListText {
            font-size: 100%;
        }

        .hookLine {
            font-size: 150%;
            padding-bottom: 1rem !important;
        }
    }

    @media screen and (orientation: landscape) {

        .loginMain {
            margin-top: 5rem;
        }

        .registerMain {
            margin-top: 5rem;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            height: 7rem;
            width: 100%;
            margin-top: 0;
            z-index: auto;
        }
    }

    @media (max-width: 810px) and (orientation: portrait) {
        .navbar {
            height: 7em;
            background-color: #091540;
        }
    }

    /* LANDSCAPE/TABLET MEDIA QUERIES END */

    /* DESKTOP/TABLET MEDIA QUERIES START */

    @media (min-width: 810px) and (orientation: landscape) {

        .loginMain {
            margin-top: 12rem;
        }

        .registerMain {
            margin-top: 3.8%;
        }

        .blogMain {
            margin-top: 7rem;
            margin-bottom: 7rem;
        }

        .aboutMain {
            margin-top: 7rem;
            margin-bottom: 7rem;
        }

        .aboutCol {
            height: 40vh;
        }

        .wrapper {
            width: 20vh;
            padding-right: 2rem;
        }

        .colBlogContent {
            width: 75%;
            padding-bottom: 4rem;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            height: 7rem;
            width: 100%;
            margin-top: 0;
            z-index: auto;
        }

        .span1 {
            color: #ebebeb;
            background-color: #091540;
            height: 7rem;
            /* bottom:-8px; */
        }

        body.dark-mode .span1 {
            color: #ebebeb;
            background-color: #ffffff;
            height: 7rem;
            color: #333;
        }
    }

    .custom-toggler.navbar-toggler {
        border-color: rgb(255, 255, 0);
    }

    .custom-toggler .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 0, 0.8)' stroke-width='3' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
    }

    body.dark-mode .custom-toggler.navbar-toggler {
        border-color: rgb(255, 0, 0);
        background-color: #ebebeb;
        color: #ebebeb;
    }

    body.dark-mode .custom-toggler .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 0, 0, 0.8)' stroke-width='3' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
    }

    .popoverInfoOne {
        --bs-popover-bg: #ebebeb;
        border-style: dotted;
        border-width: 3px;
        font-weight: 800;
        --bs-popover-max-width: 200px;
        --bs-popover-border-color: yellow;
        --bs-popover-header-bg: red;
        --bs-popover-header-color: var(--bs-white);
        --bs-popover-body-padding-x: 1rem;
        --bs-popover-body-padding-y: .5rem;
        --bs-popover-arrow-width: 1rem;
        --bs-popover-arrow-height: .5rem;
        font-family: 'Special Elite', cursive;
        --bs-popover-body-color: #333;
        --bs-popover-max-width: 300px;
        width: 250px;
    }

    body.dark-mode .popoverInfoOne {
        --bs-popover-bg: #022342;
        --bs-popover-header-bg: red;
        --bs-popover-header-color: var(--bs-white);
        --bs-popover-body-color: #ebebeb;
    }

    .popoverInfoTwo {
        --bs-popover-bg: #022342;
        border-style: dotted;
        border-width: 3px;
        font-weight: 800;
        --bs-popover-max-width: 200px;
        --bs-popover-border-color: yellow;
        --bs-popover-header-bg: red;
        --bs-popover-header-color: var(--bs-white);
        --bs-popover-body-padding-x: 1rem;
        --bs-popover-body-padding-y: .5rem;
        --bs-popover-arrow-width: 1rem;
        --bs-popover-arrow-height: .5rem;
        font-family: 'Special Elite', cursive;
        --bs-popover-body-color: #ebebeb;
        --bs-popover-max-width: 300px;
        width: 250px;
    }

    body.dark-mode .popoverInfoTwo {
        --bs-popover-bg: #ebebeb;
        --bs-popover-header-bg: red;
        --bs-popover-header-color: var(--bs-white);
        --bs-popover-body-color: #333;
    }

    .popoverInfoMain {
        --bs-popover-bg: blue;
        --bs-popover-header-bg: red;
        border-style: none;
        border-width: 3px;
        font-weight: 800;
        --bs-popover-max-width: 200px;
        --bs-popover-border-color: yellow;
        --bs-popover-header-bg: red;
        --bs-popover-header-color: var(--bs-white);
        --bs-popover-body-padding-x: 1rem;
        --bs-popover-body-padding-y: .5rem;
        --bs-popover-arrow-width: 1rem;
        --bs-popover-arrow-height: .5rem;
        font-family: 'Special Elite', cursive;
        --bs-popover-max-width: 300px;
        width: 11%;
        height: auto !important;
        text-align: left;
        font-family: 'IBM Plex Mono', monospace;
    }

    @media (max-width: 480px) {
        .popoverInfoMain {
            width: 50%;
            height: auto !important;
            text-align: center;
            font-family: 'IBM Plex Mono', monospace;
        }
    }

    @media (max-width: 810px) and (orientation: landscape) {
        .popoverInfoMain {
            width: 70%;
            height: auto !important;
            text-align: left;
            font-family: 'IBM Plex Mono', monospace;
        }
    }

    @media screen and (orientation: landscape) {
        .popoverInfoMain {
            width: 70%;
            height: auto !important;
            text-align: left;
            font-family: 'IBM Plex Mono', monospace;
        }
    }

    body.dark-mode .popoverInfoMain {
        --bs-popover-bg: red;
        --bs-popover-header-bg: blue;
        --bs-popover-header-color: var(--bs-white);
        color: #333;
        font-family: 'IBM Plex Mono', monospace;
    }

    .mainInfo {
        color: #ebebeb;
    }

    body.dark-mode .mainInfo {
        color: #333;
    }

    .trianglesmall {
        height: 123%;
    }

    .formCaptchOne {
        display: flex;
        justify-content: center;
    }

    #scrollToTopBtn {
        display: none;
    }

    .btn-circlesmallEditor {
        width: 3rem;
        height: 3rem;
        font-weight: bold;
        padding: 8px 8px;
        border-radius: 50%;
        text-align: center;
    }

    .btn-circlesmallEditor:hover {
        color: #333 !important;
    }

    .btn-circlesmallEditor:focus {
        background-color: #f1cdcdcc !important;
        color: #333 !important;
    }

    body.dark-mode .btn-circlesmallEditor {
        color: #ebebeb !important;
    }

    body.dark-mode .btn-circlesmallEditor:hover {
        background-color: hsla(36, 84%, 66%, 0.961);
        color: #333 !important;
    }

    body.dark-mode .btn-circlesmallEditor:focus {
        background-color: hsla(36, 84%, 66%, 0.961);
        color: #333 !important;
    }

    .editorBtnFonthtml {
        font-size: 9px;
        position: relative;
        bottom: 8px;
    }

    .toolPlaque {
        transform: rotate(-12deg);
        left: -16px;
        position: relative;
    }

    .mobileGoner {
        border-radius: 50%;
    }

    .aboutLeft {
        background-color: #ff2828;
    }

    .aboutCenter {
        background-color: #ff6000
    }

    .aboutRight {
        /* background-color: #c8047b; */
        background-color: #6593c4;
    }
</style>

<script></script>
