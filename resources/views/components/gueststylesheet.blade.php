<style>

body {
    /* font-family: 'Poppins', sans-serif; */
    font-family: 'IBM Plex Mono', monospace;
    /* font-family: 'Lexend', sans-serif; */
    /* font-family: 'Roboto', sans-serif; */
    /* font-family: 'Special Elite', cursive; */
}

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
        margin-top: 16vh;
        margin-bottom: 13vh;
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
        height: 12vh;
        background-color: #091540;
    }

    body.dark-mode .span1 {
        height: 12vh;
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
        height: 13vh;
    }

    body.dark-mode .span1 {
        color: #333;
        background-color: #091540;
        height: 13vh;
    }

    .indexListText {
        font-size:100%;
    }

    .hookLine {
        font-size:150%;
        padding-bottom:1rem !important;
    }
}

@media screen and (orientation: landscape) {

    .loginMain {
        margin-top: 5rem;
    }

    .registerMain {
        margin-top: 5rem;
    }
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
        margin-top: 12vh;
        margin-bottom: 6rem;
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
        height: 12vh;
        bottom:-8px;
    }

    body.dark-mode .span1 {
        color: #ebebeb;
        background-color: #ffffff;
        height: 12vh;
        color: #333;  
    }
}

/* .btn-circle {
    background-color: #1400ff;
    width: 5rem;
    height: 5rem;
    border-radius: 50%;
} */

/* DESKTOP/TABLET MEDIA QUERIES END */


/* .btn-auth {
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
    border-color: #091540;
    background-color: #091540
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
    border-color: #ff7777;
}

body.dark-mode .btn-auth:active {
    background-color: #ebebeb; 

}

body.dark-mode .btn-auth:focus {
    outline: none;
    border-color: #ebebeb;
    background-color: #ebebeb; 
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

.popoverInfoTwo {
    --bs-popover-bg:#022342;
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
    --bs-popover-body-color:#ebebeb;
    --bs-popover-max-width: 300px;
    width:250px;

}

body.dark-mode .popoverInfoTwo {
    --bs-popover-bg:#ebebeb;
    --bs-popover-header-bg: red;
    --bs-popover-header-color: var(--bs-white);
    --bs-popover-body-color:#333;
}

.popoverInfoMain {
    --bs-popover-bg: blue;
    --bs-popover-header-bg: red;
    border-style:none ;
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
    --bs-popover-max-width: 300px;
    width:11%;
    height:auto !important;
    text-align: left;
    font-family: 'IBM Plex Mono', monospace;
}

@media (max-width: 480px) {
    .popoverInfoMain {

    width:50%;
    height:auto !important;
    text-align: center;
    font-family: 'IBM Plex Mono', monospace;
}
    
}

@media (max-width: 810px) and (orientation: landscape) 
    {
    .popoverInfoMain {
        width:70%;
        height:auto !important;
        text-align: left;
        font-family: 'IBM Plex Mono', monospace;
    }
}

@media screen and (orientation: landscape) {

        .popoverInfoMain {

        width:70%;
        height:auto !important;
        text-align: left;
        font-family: 'IBM Plex Mono', monospace;
    }
}

/* a.myNavUnderlineTitle {
    display: inline-block;
    margin: 0 10px;
    padding: 10px 0;
    color: #ebebeb;
    text-decoration: none;
    position: relative;
}

body.dark-mode a.myNavUnderlineTitle {
    color: #333;
}

a.myNavUnderlineTitle:before {
    content: "";
    display: block;
    position: absolute;
    bottom: 2px;
    left: 0;
    width: 100%;
    height: 6px;
    background-color: #ebebeb;
    transform: scaleX(0);
    transition: transform 0.3s ease-in-out;
    transform-origin: bottom right;
}

body.dark-mode a.myNavUnderlineTitle:before {
    background-color: #333;
}

a.myNavUnderlineTitle:hover:before {
    visibility: visible;
    transform: scaleX(1);
    transform-origin: bottom left;
}

a.myNavUnderlineTitle.active:before {
    visibility: visible;
    transform: scaleX(1);
    transform-origin: bottom left;
} */

body.dark-mode .popoverInfoMain {
    --bs-popover-bg: red;
    --bs-popover-header-bg: blue;
    --bs-popover-header-color: var(--bs-white);
    color:#333;
    font-family: 'IBM Plex Mono', monospace;    
}

.mainInfo {
    color:#ebebeb;
 }

 body.dark-mode .mainInfo {
    color:#333;
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
    transform: rotate(-12deg);
    left: -16px;
    position: relative;
}

.mobileGoner {
    border-radius:50%;
}

/* new bring to css */
.hookLineParaPlay {
    color:#ffc107;
}

.hookLineParaKnow {
    color:#ff0000;
}

.hookLineParaLib {
    color:#1400ff;
}

#cookieConsent {
    display: none;
}

/* .glowing-input {
  animation: glowing 2s infinite;
}

@keyframes glowing {
  0% {
    box-shadow: 0 0 5px #FF8C00, 0 0 10px #FF8C00, 0 0 20px #FF8C00;
  }
  50% {
    box-shadow: 0 0 20px #FF8C00, 0 0 40px #FF8C00, 0 0 80px #FF8C00;
  }
  100% {
    box-shadow: 0 0 5px #FF8C00, 0 0 10px #FF8C00, 0 0 20px #FF8C00;
  }
} */
/* .circle-container {
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
}

.circle-svg {
  position: absolute;
  width: 220%;
  height: 160%;
}

.circle-path {
  fill: transparent;
  stroke: none;
}

.circle-text {
  font-size: 14px;
  font-weight:bold;
  fill: red;
  text-transform: uppercase;
}
 */

 .mainInfo {
    color:#ebebeb;
 }

 body.dark-mode .mainInfo {
    color:#333;
 }
</style>

<script>


</script>