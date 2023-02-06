<template>
    <div>
        <div class="row">
            <div class="col s12">
                <div class="primaryColorDiv">
                    <div class="headerDiv">
                        <a href="/">
                            <img src="/media/img/setupWeb/wcdMobileLogo.png" alt="wcdMobileLogo.png">
                        </a>
                        <p class="headerTitle">
                            It is time for the world
                            to hear your pulse
                        </p>
                    </div>
                    <div>
                        <img src="/media/img/setupWeb/3dDoctors.png" alt="3dDoctors.png" class="primaryColorDocsImg">
                    </div>
                </div>
            </div>

            <div class="col s12">
                <div class="contentDiv">
                    <div v-show="view == 0">
                        <p class="contentTitle">How many experience do you have</p>

                        <form class="formContain">
                            <div class="row">
                                <div class="input-field col s3 offset-s5">
                                    <input type="number" placeholder="0" class="validate">
                                </div>
                            </div>
                        </form>
                    </div>

                    <div v-show="view == 1">
                        <p class="contentTitle">Have you done any volunteer work?</p>
                    
                        <form class="formContain">
                            <div class="row">
                                <div class="col s7 offset-s4">
                                    <label class="radioBtnLabel">
                                        <input class="with-gap" name="group1" type="radio" />
                                        <span class="radioBtnSpan" @click="yesVolun()">Yes</span>
                                    </label>
                                    <label @click="noVolun()">
                                        <input class="with-gap" name="group1" type="radio" />
                                        <span class="radioBtnSpan">No</span>
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div v-show="view == 2">
                        <p class="contentTitle">How many have you done</p>
                    
                        <form class="formContain">
                            <div class="row">
                                <div class="input-field col s3 offset-s5">
                                    <input type="number" placeholder="0" class="validate">
                                </div>
                            </div>
                        </form>
                    </div>

                    <div v-show="view == 3">
                        <p class="contentTitle">Do you have any awards?</p>
                    
                        <form class="formContain">
                            <div class="row">
                                <div class="col s7 offset-s4">
                                    <label class="radioBtnLabel">
                                        <input class="with-gap" name="group1" type="radio" />
                                        <span class="radioBtnSpan" @click="yesAward()">Yes</span>
                                    </label>
                                    <label @click="noAward()">
                                        <input class="with-gap" name="group1" type="radio" />
                                        <span class="radioBtnSpan">No</span>
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div v-show="view == 4">
                        <p class="contentTitle">How many awards do you have</p>
                    
                        <form class="formContain">
                            <div class="row">
                                <div class="input-field col s3 offset-s5">
                                    <input type="number" placeholder="0" class="validate">
                                </div>
                            </div>
                        </form>
                    </div>

                    <div v-show="view == 5">
                        <p class="contentTitle">Do you have any certificates?</p>
                    
                        <form class="formContain">
                            <div class="row">
                                <div class="col s7 offset-s4">
                                    <label class="radioBtnLabel">
                                        <input class="with-gap" name="group1" type="radio" />
                                        <span class="radioBtnSpan" @click="yesCert()">Yes</span>
                                    </label>
                                    <label @click="noCert()">
                                        <input class="with-gap" name="group1" type="radio" />
                                        <span class="radioBtnSpan">No</span>
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div v-show="view == 6">
                        <p class="contentTitle">How many certificates do you have?</p>
                    
                        <form class="formContain">
                            <div class="row">
                                <div class="input-field col s3 offset-s5">
                                    <input type="number" placeholder="0" class="validate">
                                </div>
                            </div>
                        </form>
                    </div>

                    <div v-show="view == 7">
                        <p class="contentTitle">Upload a banner</p>
                        
                        <div class="bannerImgDiv">
                            <img src="/media/img/setupWeb/milestoneBanner.png" 
                                alt="milestoneBanner.png" 
                                class="bannerImg"
                            >
                        </div>

                        <form class="formContain">
                            <div class="row">
                                <div class="col s9">
                                    <p class="bannerImgInstruct">The image should be 451px width and 512px height</p>
                                </div>
                                <div class="file-field input-field col s3">
                                    <i class="material-icons bannerInputIcon right">
                                        file_upload
                                        <input type="file">
                                    </i>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate bannerImgInput" type="text" placeholder="Upload">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div v-show="view == 8">
                        <p class="contentTitle">Are you satisfied with the changes?</p>
                    
                        <form class="formContain">
                            <div class="row">
                                <div class="col s7 offset-s4">
                                    <label class="radioBtnLabel">
                                        <input class="with-gap" name="group1" type="radio" />
                                        <span class="radioBtnSpan" @click="yesSatisfy()">Yes</span>
                                    </label>
                                    <label @click="noSatisfy()">
                                        <input class="with-gap" name="group1" type="radio" />
                                        <span class="radioBtnSpan">No</span>
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div v-show="view == 9">
                        <p class="contentTitle">
                            <span class="milestoneCongratMsg">Congratulations!!!</span>
                            <br>
                            on completing your milestone process
                        </p>
                        <div class="viewWebBtnDiv">
                            <a href="/preview/1" class="btn viewWebBtn">
                                View website
                            </a>
                        </div>
                    </div>

                    <!-- Prev/Next Button Section -->
                    <div v-if="view != 9" class="skipDiv">
                        <button class="skipBtn" 
                            @click="prev()" 
                            :disabled="view < 1" 
                            :class="view > 0 ? 'btnOn' : 'btnOff'"
                        >
                            <i class="material-icons">keyboard_arrow_left</i>
                        </button>
                            <span class="skipTxt">skip</span>
                        <button class="skipBtn" 
                            @click="next()" 
                            :disabled="view == view.length" 
                            :class="view != 9 ? 'btnOn' : 'btnOff'"
                        >
                            <i class="material-icons">keyboard_arrow_right</i>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        components: { },
        data() {
            return {
                view: 0,
            };
        },
        mounted() { },
        methods: {
            prev() {
                this.view != 0 ? this.view-- : null;
            },
            next() {
                this.view != 9 ? this.view++ : null;
            },
            yesVolun() {
                this.view = 2;
            },
            noVolun() {
                this.view = 3;
            },
            yesAward() {
                this.view = 4;
            },
            noAward() {
                this.view = 5;
            },
            yesCert() {
                this.view = 6;
            },
            noCert() {
                this.view = 7;
            },
            yesSatisfy() {
                this.view = 9;
            },
            noSatisfy() {
                this.view = 7;
            }
        },
    };
</script>
<style>
    .flex {
        display: flex;
    }

    .btnOn {
        border: 2px solid var(--primary);
        color: var(--primary);
    }

    .btnOff {
        border: 2px solid #D9D9D9;
        color: #D9D9D9;
    }
</style>