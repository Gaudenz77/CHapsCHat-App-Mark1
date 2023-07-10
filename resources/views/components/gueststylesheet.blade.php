<style>

@media (max-width: 480px) {
        .loginMain {
            margin-top: 121px;
            margin-bottom: 11vh;
        }

        .registerMain {
            margin-top: 125px;
            margin-bottom: 13vh;
        }

        .blogMain {
            margin-top: 6rem;
            margin-bottom: 12vh;
        }

        .aboutMain {
            margin-top: 22vh;
            margin-bottom: 16vh;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            height: 12%;
            width: 100%;
            margin-top: 0;
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

        .toggleOwn {
            height: 10%;
        }

        .span1 {
            height: 13vh;
            background-color: #091540;
        }

        body.dark-mode .span1 {
            height: 13vh;
            background-color: #ffffff;
        }

        .welcomeSmall {
            display:none;
        }

    }

    /* LANDSCAPE/TABLET MEDIA QUERIES START */

    @media (max-width: 810px) and (orientation: landscape) 
        {

        /* CSS rules for mobile landscape mode */
        .registerMain {
            margin-top: 5rem;
            margin-bottom: 20rem;
        }

        .span1 {
            color: #ebebeb;
            background-color: #ffffff;
            height: 11vh;
        }

        body.dark-mode .span1 {
            color: #333;
            background-color: #091540;
            height: 11vh;
        }

        .indexListText {
            font-size:100%;
        }

        .hookLine {
            font-size:150%;
            padding-bottom:1rem !important;
        }

        .hookLinePara {
            color:red !important;
        }

    }

    @media screen and (orientation: landscape) {
    
    }
    /* LANDSCAPE/TABLET MEDIA QUERIES END */



    /* DESKTOP/TABLET MEDIA QUERIES START */

    @media (min-width: 810px)  and (orientation: landscape) {

        .loginMain {
            margin-top: 12rem;
        }

        .registerMain {
            margin-top: 3.8%;
        }

        .blogMain {
            margin-top: 12vh;
            margin-bottom: 2rem;
        }

        .aboutMain {
            margin-top: 35vh;* {
            /* border: 1px solid red !important; */
        }
            margin-bottom: 18vh;
        }

        .aboutCol {
            height: 40vh;
        }

        .wrapper {
            width: 20vh;
            padding-right: 2rem;
        }

        .colBlogContent {
            width:75%;
            padding-bottom:4rem;
        }

        .span1 {
            color: #ebebeb;
            background-color: #091540;
            height: 11.3vh;
            bottom:-8px;
        }

        body.dark-mode .span1 {

            color: #ebebeb;
            background-color: #ffffff;
            color: #333;
            
        }
    }


    /* DESKTOP/TABLET MEDIA QUERIES END */


    .btn-auth {
        background-color: blue;
        width: 6rem;
        height: 6rem;
        border-radius: 50%;
        border-width: 5px;
        border-color: yellow;
        padding: 1rem 0 !important;
        color: #fff;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        cursor: pointer;
    }

    .btn-auth:hover {
        background-color: #0099ff;
    }

    .btn-auth:active {
        background-color: #0066cc;
    }

    .btn-auth:focus {
        outline: none;
    }

    body.dark-mode .btn-auth {
        background-color: #ff0000;
        width: 6rem;
        height: 6rem;
        border-radius: 50%;
        border-width: 5px;
        border-color: #0000ff;
        padding: 1rem 0 !important;
        color: #fff;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        cursor: pointer;
    }

    body.dark-mode .btn-auth:hover {
        background-color: #ff7777;
    }

    body.dark-mode .btn-auth:active {
        background-color: #cc1f00;
    }

    body.dark-mode .btn-auth:focus {
        outline: none;
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
        --bs-popover-bg:#ebebeb;
        border-style: dotted ;
        border-width:3px;
        font-weight:800;
        --bs-popover-max-width: 200px;
        --bs-popover-border-color: yellow;
        --bs-popover-header-bg: red;
        --bs-popover-header-color: var(--bs-white);
        --bs-popover-body-padding-x: 1rem;
        --bs-popover-body-padding-y: .5rem;
        --bs-popover-arrow-width: 1rem;
        --bs-popover-arrow-height: .5rem;
        font-family: 'Special Elite', cursive;
        --bs-popover-body-color:#333;
        --bs-popover-max-width: 300px;
        width:250px;

    }

    body.dark-mode .popoverInfoOne {
        --bs-popover-bg:#022342;
        --bs-popover-header-bg: red;
        --bs-popover-header-color: var(--bs-white);
        --bs-popover-body-color:#ebebeb;
    }

body {
    /* font-family: 'Poppins', sans-serif; */
    font-family: 'IBM Plex Mono', monospace;
    /* font-family: 'Lexend', sans-serif; */
    /* font-family: 'Roboto', sans-serif; */
    /* font-family: 'Special Elite', cursive; */
}

.trianglesmall {
    height:123%;
 
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
    /* font-size: 50%; */
    font-weight: bold;
    /* background-color: #ebebeb; */
    padding: 8px 8px;
    border-radius: 50%;
    text-align: center;
    /* margin-bottom: 15px; */
}

.btn-circlesmallEditor:hover {
    /* background-color: #212caa !important; */
    color: #333 !important;
}

.btn-circlesmallEditor:focus {
    background-color: #f1cdcdcc !important;
    color: #333 !important;
}

body.dark-mode .btn-circlesmallEditor {
    /* background-color: #333 !important; */
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

.scrollUpChevron {
        color:#0000ff;
}

body.dark-mode .scrollUpChevron {
        color:#ffff00;
}


.cookiemodal .modal-dialog {
    position: fixed;
    left: 0;
    right: 0;
    top:50%;
    bottom: 0;
    margin: auto;
    width:90%;
}
  
.cookiemodal .modal-content {
    margin-top: auto;
    margin-bottom: 0;
}
  
.cookiemodal .modal-footer {
    justify-content: flex-end;
}
  
.cookiemodal .modal-body {
    background-color: #ebebeb !important;
}
  
body.dark-mode .cookiemodal .modal-body  {
    background-color: #040a1f !important;
}


.toolPlaque {
    transform: rotate(10deg);
}

.mobileGoner {
    border-radius:50%;
}

</style>

<script>


</script>