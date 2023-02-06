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
                        <p class="contentTitle">Do want your names to appear as follows?</p>

                        <form class="formContain">
                            <div class="row">
                                <div class="input-field col s5">
                                    <input type="text" value="John" class="validate">
                                </div>
                        
                                <div class="input-field col s5 offset-s1">
                                    <input type="text" value="Doe" class="validate">
                                </div>
                            </div>
                        </form>
                    </div>

                    <div v-show="view == 1">
                        <p class="contentTitle">Do you like this picture as your main image?</p>
                        
                        <div class="proImgDiv">
                            <img src="/media/img/setupWeb/profilePics.png" alt="profilePics.png" class="proImg">
                        </div>
                        
                        <div class="proImgBtnMainDiv">
                            <div class="proImgBtnContainDiv">
                                <a href="#" class="proImgYesBtn" @click="yesProImg()">Yes</a>
                                <form>
                                    <a href="#" class="proImgSelectFile"  @click="$refs.file.click()">
                                        No
                                        <i class="material-icons proInputFileUpladIcon">file_upload</i>
                                    </a>
                                    <input type="file" ref="file" class="displayNone" />
                                </form>
                            </div>
                            <div class="proImgInstructDiv">
                                <p class="proImgInstruct">The image should be 451px width and 512px height</p>
                            </div>
                        </div>
                    </div>

                    <div v-show="view == 2">
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

                    <div v-show="view == 3">
                        <p class="contentTitle">
                            <span class="milestoneCongratMsg">Congratulations!!!</span>
                            <br>
                            on completing your Bio settings. 
                            please click the link to preview on your website
                        </p>
                        
                        <div class="viewWebBtnDiv">
                            <a href="/preview/1" class="btn viewWebBtn">
                                View website
                            </a>
                        </div>
                    </div>

                    <!-- Prev/Next Button Section -->
                    <div v-if="view != 3" class="skipDiv">
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
                            :disabled="view > 1" 
                            :class="view > 1 ? 'btnOff' : 'btnOn'"
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
                view: 1,
            };
        },
        mounted() { },
        methods: {
            prev() {
                this.view != 0 ? this.view-- : null;
            },
            next() {
                this.view != 3 ? this.view++ : null;
            },
            yesSatisfy() {
                this.view = 3;
            },
            noSatisfy() {
                this.view = 1;
            },
            yesProImg() {
                this.view = 2;
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
    .displayNone {
        display: none;
    }
</style>