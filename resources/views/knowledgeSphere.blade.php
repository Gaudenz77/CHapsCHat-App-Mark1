@extends('layouts.master')

@section('title', 'ChapsChat')

@section('body-class', 'knowledgeMain')

@section('content')

    <section class="">
        <div class="container mt-3">
            <div class="row justify-content-center align-items-center" style="">
                <div class="col-sm-12 col-md-8 col-lg-8 p-3 rounded order-2 mx-5 px-1 px-md-5 pb-5 knowledgeTable">
                    <h2 class="mx-3 mx-md-0  pt-5"><strong class="text-warning">{{ Auth::user()->name }}'s</strong><small>
                            Library</small></h2>
                    <my-library-content></my-library-content>
                </div>
                <div class="col-sm-5 col-md-10 col-lg-6 circleKnowledgeForm order-1 text-center mb-sm-0 mb-md-0 mb-lg-4 mb-0 mt-2 pt-4 pb-3 animate__animated animate__zoomInDown"
                    id="formContainer" style="display: none;">
                    <div class="form-wrapper">
                        <div class="circle-text">
                            <svg viewBox="0 -16 200 30" xmlns="http://www.w3.org/2000/svg">
                                <path id="halfCirclePath" d="M0,100 A100,100 0 0,1 200,100" fill="none" stroke="none">
                                </path>
                                <text>
                                    <textPath href="#halfCirclePath" startOffset="50%" text-anchor="middle"
                                        class="rainbow-text" :fill="isDarkMode ? '#333' : '#ebebeb'">Library</textPath>
                                </text>
                            </svg>
                            <div class="row justify-content-center align-items-center">

                                <a tabindex="0" data-bs-toggle="popover" data-bs-custom-class="popoverInfoTwo"
                                    data-bs-trigger="focus" data-bs-html="true"
                                    data-bs-title="
                                    <div class=''>How To Use Your Library  
                                    <i class='animate__animated animate__flip fa-solid fa-face-laugh-wink fa-2x d-flex justify-content-center'></i>
                                    </div>"
                                    data-bs-content="
                                    <div class=''>
                                        <ol>
                                            <li>Give your entry a meaningful title (# included).</li>
                                            <li>Fill in content as you wish (text only atm).</li>
                                            <li>Send your record to your personal library by pressing the disc.</li>
                                            <li>You can edit and delete all your records anytime.</li>
                                            <li><strong>Both, the new entry and edit inputs take HTML tags!</strong></li>
                                        </ol>
                                    </div>">
                                    <i class="fa-solid fa-circle-info fa-4x infoKnowledge animate__animated animate__heartBeat animate__delay-5s"></i></a>
                                                </div>
                                <p class="hintKnowledge my-3">Arm yourself, with knowledge!</p>
                            </div>
                        <my-library-form :edit-mode="editMode"></my-library-form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

<script>
    
    // CREATE LIBRARY DIV -------------------------------------------------------TEST IF ENTRY PAGE STILL WORKING!!!

    document.addEventListener("DOMContentLoaded", () => {
        const createButton = document.getElementById("createButton");
        const formContainer = document.getElementById("formContainer");

        createButton.addEventListener("click", () => {
            formContainer.style.display = "block";
        });
    });

    document.addEventListener("DOMContentLoaded", () => {
        const createButton = document.getElementById("createButton");
        const formContainer = document.getElementById("formContainer");
        const closeButton = document.getElementById("closeButton");

        createButton.addEventListener("click", () => {
            formContainer.style.display = "block";
        });

        closeButton.addEventListener("click", () => {
            formContainer.style.display = "none";
        });
    });
</script>
