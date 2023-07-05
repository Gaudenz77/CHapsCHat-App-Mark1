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
            height: 10.3vh;
        }

        body.dark-mode .span1 {
            height: 10.3vh;
        }
    }

    /* LANDSCAPE/TABLET MEDIA QUERIES START */

    @media (max-width: 800px) and (orientation: landscape) 
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
            height: 10.3vh;
        }
    }
    /* LANDSCAPE/TABLET MEDIA QUERIES END */

    /* DESKTOP/TABLET MEDIA QUERIES START */

    @media (min-width: 800px)  and (orientation: landscape) {

        .loginMain {
            margin-top: 14rem;
        }

        .registerMain {
            margin-top: 8%;
            margin-bottom: -50%;
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
            height: 10.3vh;
        }

        body.dark-mode .span1 {

            color: #ebebeb;
            background-color: #ffffff;
            color: #333;
            
        }
    }

    .trianglefixSmall {
        height: 88%;
        width: 130%;
        position: relative;
        left: 6px;
    }

    .squareSmall {
        position: relative;
        right: 17px;
    }


    .overlay_container-small {
        position: relative;
    }

    .overlay-small {
        position: absolute;
        top: 0;
        left: -6px;
        width: 109%;
        height: 69%;
        background-color: #000000b3;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity .3s;
        top: 13px;
    }

    .overlay-text-small {
        color: #fff;
        font-size: 10px;
        font-weight: 700;
        transform: rotate(-45deg);
    }

    .overlay-text-triangle-small {
    color: white;
    font-size: 18px;
    font-weight: bold;
    transform:(-60deg);
  }

 /*    .editor-container {
      display: none;
    }

    #editor {
      display: block;
    } */

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

    /* .footerOwn {
        height: 11vh;
    } */

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

</style>
<script>


</script>