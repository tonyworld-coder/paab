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
                    <!-- Get Started Section -->
                    <div v-show="view == 0">
                        <p class="contentTitle">Lets help you setup your website</p>
                        
                        <div class="getStartedBtnDiv">
                            <a href="#" class="waves-effect waves-light btn getStartedBtn" @click="getStarted()">GET STARTED</a>
                        </div>
                    </div>

                    <!-- Confirm your name section -->
                    <div v-show="view == 1">
                        <p class="contentTitle">Is it okay to address you as follows?</p>

                        <form>
                            <div class="row formInnerDiv">
                                <div class="input-field col s2">
                                    <select>
                                        <option value="" disabled selected>MD</option>
                                        <option value="1">MD</option>
                                        <option value="2">Dr</option>
                                    </select>
                                </div>

                                <div class="input-field col s3">
                                    <input type="text" value="Doe" class="validate">
                                </div>
                                <div class="input-field col s3">
                                    <input type="text" value="John" class="validate">
                                </div>
                                <div class="input-field col s3">
                                    <input type="text" value="Chigozie" class="validate">
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Domain name check section -->
                    <div v-show="view == 2">
                        <p class="contentTitle">Are you ok with this domain name?</p>

                        <form>
                            <div class="row formInnerDiv">
                                <div class="input-field col s8">
                                    <input type="text" value="johndoemed.com" class="validate">
                                    <p class="unAvailTxt">
                                        Not satisfied with the suggestions below, type in
                                        your preferred domain name
                                    </p>
                                </div>
                                <div class="col s4">
                                    <p class="unAvailTitle">Unavailable</p>
                                </div>

                                
                            </div>
                        </form>

                        <div class="row">
                            <div class="col s12 domianMainDiv">
                                <p class="primaryTxt">Suggestions</p>
                        
                                <div class="col s1">
                                    <p class="domainSelectP">
                                        <label>
                                            <input class="with-gap" name="group1" type="radio" />
                                            <span></span>
                                        </label>
                                    </p>
                                </div>
                                <div class="col s11">
                                    <table>
                                        <!-- Table Head Section if ever needed
                                        <thead><tr><th></th></tr></thead> -->
                                        <tbody>
                                            <tr>
                                                <td class="domainTdName">mddoejohn.com</td>
                                                <td class="domainTdState">Available</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col s12 domianMainDiv">
                                <div class="col s1">
                                    <p class="domainSelectP">
                                        <label>
                                            <input class="with-gap" name="group1" type="radio" />
                                            <span></span>
                                        </label>
                                    </p>
                                </div>
                                <div class="col s11">
                                    <table>
                                        <!-- Table Head Section if ever needed
                                        <thead><tr><th></th></tr></thead> -->
                                        <tbody>
                                            <tr>
                                                <td class="domainTdName">johnmddoe.com</td>
                                                <td class="domainTdState">Available</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col s12 domianMainDiv">
                                <div class="col s1">
                                    <p class="domainSelectP">
                                        <label>
                                            <input class="with-gap" name="group1" type="radio" />
                                            <span></span>
                                        </label>
                                    </p>
                                </div>
                                <div class="col s11">
                                    <table>
                                        <!-- Table Head Section if ever needed
                                        <thead><tr><th></th></tr></thead> -->
                                        <tbody>
                                            <tr>
                                                <td class="domainTdName">johndoe.com</td>
                                                <td class="domainTdState">Available</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col s12 domianMainDiv">
                                <div class="col s1">
                                    <p class="domainSelectP">
                                        <label>
                                            <input class="with-gap" name="group1" type="radio" />
                                            <span></span>
                                        </label>
                                    </p>
                                </div>
                                <div class="col s11">
                                    <table>
                                        <!-- Table Head Section if ever needed
                                        <thead><tr><th></th></tr></thead> -->
                                        <tbody>
                                            <tr>
                                                <td class="domainTdName">mdjohn.com</td>
                                                <td class="domainTdState">Available</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div v-show="view == 3">
                        <p class="contentTitle">Are you ok with this domain name?</p>
                         
                        <div class="proImgDiv">
                            <img src="/media/img/setupWeb/profilePics.png" alt="profilePics.png" class="proImg">
                        </div>

                        <div class="proImgBtnMainDiv">
                            <div class="proImgBtnContainDiv">
                                <a href="#" class="proImgYesBtn">Yes</a>
                                <div>
                                    <form action="#">
                                        <div class="file-field input-field flex">
                                            <div class="file-path-wrapper proImgInputDiv">
                                                <input class="file-path validate proImgInput" placeholder="No" type="text">
                                            </div>
                                            <div>
                                                <i class="material-icons proInputFileUpladIcon">file_upload</i>
                                                <input type="file">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="proImgInstructDiv">
                                <p class="proImgInstruct">The image should be 451px width and 512px height</p>
                            </div>
                        </div>
                    </div>

                    <!-- Prev/Next Button Section -->
                    <div v-if="view > 0" class="skipDiv">
                        <button class="skipBtn" 
                            @click="prev()" 
                            :disabled="view == 1" 
                            :class="view > 1 ? 'btnOn' : 'btnOff'"
                        >
                            <i class="material-icons">keyboard_arrow_left</i>
                        </button>
                            <span class="skipTxt">skip</span>
                        <button class="skipBtn" 
                            @click="next()" 
                            :disabled="view == view.length"
                            :class="view != 3 ? 'btnOn' : 'btnOff'"
                        >
                            <i class="material-icons">keyboard_arrow_right</i>
                        </button>

                        <!-- <i class="material-icons skipBtnIcon" @click="prev()">keyboard_arrow_left</i>
                        <span class="skipTxt">skip</span>
                        <i class="material-icons skipBtnIcon" @click="next()">keyboard_arrow_right</i> -->
                    </div>

                    <!-- <InnerFooter /> -->
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import InnerFooter from "./partials/InnerFooterComponent.vue";
export default {
    components: {
        InnerFooter
    },
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
            this.view != 3 ? this.view++ : null;
        },
        getStarted() {
            this.view = 1;
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