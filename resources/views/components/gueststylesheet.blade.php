<style>
    body {
        /* background-color: black; */
    }

    /* #loginMain {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin-top: -10rem;
        background: url("./assets/img/architecture-4000.jpg") no-repeat center center;
        background-size: cover;
        position: relative;
        z-index: 1;
    } */

    @media (max-width: 480px) {
        .loginMain {
            margin-top: 24vh;
            margin-bottom: 18vh;
        }

        .registerMain {
            margin-top: 24vh;
            margin-bottom: 32vh;
        }

        .welcomeMain {
            margin-top: 6rem;
            margin-bottom: 15rem;
        }

        .blogMain {
            margin-top: 26vh;
            margin-bottom: 22.5vh;
        }

        .aboutMain {
            margin-top: 22vh;
            margin-bottom: 16vh;
        }

        .navbar {
            height: 6rem;
            background-color: #091540;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            height: 24%;
            width: 100%;
            margin-top: 0;
        }

        .colTriangle {
            left: 52%;
        }

        .navbar-toggler {
            /* font-size:20px;
        margin-left:0rem;
        margin-right: 0rem;  */
        }

        .logoImg {
            /* width: 30%;
            margin-left: 2rem;
            margin-bottom: -20px;
            padding-left: 1rem;
            position: relative;
            left: 0;
            justify-content: center; */
            display:none;
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

        a.myNavToggleTitle {
            color: #333;
        }

        .toggleOwn {
            height: 10%;
        }

        .span1 {
            height: 12vh;
        }

        body.dark-mode .span1 {
            height: 12vh;
        }
    }

    /* LANDSCAPE/TABLET MEDIA QUERIES START */

    @media (min-width: 481px) and (max-width: 767px) and (orientation: landscape) {

        /* CSS rules for mobile landscape mode */
        .registerMain {
            margin-top: 5rem;
            margin-bottom: 20rem;
        }

        .navbar {
            height: 25%;
            background-color: #091540;
        }

        .span1 {
            color: #ebebeb;
            background-color: #4e80b7;
            height: 25vh;
        }

    }

    /* LANDSCAPE/TABLET MEDIA QUERIES END */

    @media (min-width: 800px) and (orientation: landscape) {

        .welcomeMain {
            margin-top: 7rem;
            margin-bottom: 20rem;
        }

        .loginMain {
            margin-top: 14rem;
        }

        .registerMain {
            margin-top: 8%;
            margin-bottom: -50%;
        }

        .blogMain {
            margin-top: 12vh;
        }

        .aboutMain {
            margin-top: 35vh;
            margin-bottom: 18vh;
        }

        .aboutCol {
            height: 40vh;
        }

        .wrapper {
            width: 20vh;
            padding-right: 2rem;
        }

        .navbar {
            height: 12%;
            background-color: #091540;
        }

        .colBlogContent {
            width:75%;
            padding-bottom:4rem;
        }

        .span1 {
            color: #ebebeb;
            background-color: #4e80b7;
            height: 10.3vh;
        }

        body.dark-mode .span1 {
            color: #333;
            background-color: #022342;
            height: 10.3vh;
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

</style>
