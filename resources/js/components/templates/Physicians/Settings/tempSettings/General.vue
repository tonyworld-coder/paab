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
                        <p class="contentTitle">What do you want the title of your website to be?</p>

                        <form class="formContain">
                            <div class="row">
                                <div class="input-field col s2">
                                    <select>
                                        <option value="1">MD</option>
                                        <option value="2">Dr</option>
                                    </select>
                                </div>

                                <div class="input-field col s4 offset-s1">
                                    <input type="text" placeholder="Last Name" class="validate">
                                </div>

                                <div class="input-field col s4 offset-s1">
                                    <input type="text" placeholder="First Name" class="validate">
                                </div>
                            </div>
                        </form>
                    </div>

                    <div v-show="view == 1">
                        <p class="contentTitle">Do you want to setup a favicon (logo) for your site?</p>

                        <form class="formContain">
                            <div class="row">
                                <div class="col s7 offset-s4">
                                    <label class="radioBtnLabel">
                                        <input class="with-gap" name="group1" type="radio" />
                                        <span class="radioBtnSpan" @click="yesFavIcon()">Yes</span>
                                    </label>
                                    <label @click="noFavIcon()">
                                        <input class="with-gap" name="group1" type="radio" />
                                        <span class="radioBtnSpan">No</span>
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div v-show="view == 2">
                        <p class="contentTitle">Set up a favicon logo</p>

                        <form class="formContain">
                            <div class="viewWebBtnDiv">
                                <a href="#" class="btn viewWebBtn" @click="$refs.file.click()">
                                    Upload favicon
                                </a>
                                <input type="file" ref="file" class="displayNone" />
                            </div>
                        </form>
                    </div>

                    <div v-show="view == 3">
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

                    <div v-show="view == 4">
                        <p class="contentTitle">
                            <span class="milestoneCongratMsg">Congratulations!!!</span>
                            <br>
                            on completing your General settings. 
                            please click the link to preview on your website
                        </p>
                        
                        <div class="viewWebBtnDiv">
                            <a href="/preview/1" class="btn viewWebBtn">
                                View website
                            </a>
                        </div>
                    </div>

                    <!-- Prev/Next Button Section -->
                    <div v-if="view != 4" class="skipDiv">
                        <button class="skipBtn" @click="prev()" 
                            :disabled="view < 1"
                            :class="view > 0 ? 'btnOn' : 'btnOff'">
                            <i class="material-icons">keyboard_arrow_left</i>
                        </button>
                            <span class="skipTxt">skip</span>
                        <button class="skipBtn" @click="next()" 
                            :disabled="view == 3"
                            :class="view != 3 ? 'btnOn' : 'btnOff'">
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
    components: {},
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
        yesFavIcon() {
            this.view = 2;
        },
        noFavIcon() {
            this.view = 3;
        },
        yesSatisfy() {
            this.view = 4;
        },
        noSatisfy() {
            this.view = 2;
        },
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