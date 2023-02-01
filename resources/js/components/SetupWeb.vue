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

                        <form class="mainForm">
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

                        <form class="mainForm">
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
                                            <input class="with-gap" name="domainName" type="radio" />
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
                                            <input class="with-gap" name="domainName" type="radio" />
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
                                            <input class="with-gap" name="domainName" type="radio" />
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
                                            <input class="with-gap" name="domainName" type="radio" />
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

                    <!-- Client Img check section -->
                    <div v-show="view == 3">
                        <p class="contentTitle">Are you ok with this picture?</p>
                         
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

                    <!-- Acadamic Section -->
                    <div v-show="view == 4">
                        <!-- Academic Check -->
                        <div v-show="academicCheck == 0">
                            <p class="contentTitle">Which academic path suits you?</p>
                            
                            <div class="acaMainDiv">
                                <p>
                                    <label @click="undergradMedSelected()">
                                        <input class="with-gap" name="acadamic" type="radio" />
                                        <span class="radioBtnSpan">Undergraduate School and Medical School</span>
                                    </label>
                                </p>
                                <p>
                                    <label @click="medSelected()">
                                        <input class="with-gap" name="acadamic" type="radio" />
                                        <span class="radioBtnSpan">Only Medical School</span>
                                    </label>
                                </p>
                            </div>
                        </div>
                        

                        <!-- Undergrad and Med school -->
                        <div v-show="academicCheck == 1">
                            <div>
                                <p class="contentTitle">Tell us about your time in undergraduate school</p>

                                <div v-if="attendedSchInfo == 0">
                                    <form class="mainForm" > 
                                        <div class="row formContainDiv">
                                            <div class="input-field col s12">
                                                <input placeholder="What Institution did you attend" type="text" class="validate formInput">
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div v-if="attendedSchInfo == 1">
                                    <form class="mainForm">
                                        <div class="row formInnerDiv">
                                            <div class="input-field col s5">
                                                <input placeholder="What major" type="text" class="validate formInput">
                                            </div>
                                            <div class="input-field col s6">
                                                <input placeholder="What minor(optional)" type="text" class="validate formInput">
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div v-if="attendedSchInfo == 2">
                                    <form class="mainForm">
                                        <div class="row formInnerDiv">
                                            <div class="col s6">
                                                <p class="schQuesP">When did you start</p>
                                                <div class="row spaceAround">
                                                    <div class="col s3">
                                                        <p class="schQuesP1">Start</p>
                                                    </div>
                                                    <div class="input-field col s4 formInput1ColDiv">
                                                        <input placeholder="Month" type="text" class="validate formInput1">
                                                    </div>
                                                    <div class="input-field col s4 formInput1ColDiv">
                                                        <input placeholder="Year" type="text" class="validate formInput1">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" col s5">
                                                <p class="schQuesP" >When did you end</p>
                                                <div class="row spaceAround">
                                                    <div class="col s2">
                                                        <p class="schQuesP1">End</p>
                                                    </div>
                                                    <div class="input-field col s4 formInput1ColDiv">
                                                        <input placeholder="Month" type="text" class="validate formInput1">
                                                    </div>
                                                    <div class="input-field col s4 formInput1ColDiv">
                                                        <input placeholder="Year" type="text" class="validate formInput1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                            
                        </div>

                        <!-- Med school -->
                        <div v-show="academicCheck == 2">
                            <!-- <div> -->
                                <p class="contentTitle">Tell us about your time in medical school</p>
                            
                                <div>
                                    <div v-if="attendedMedSch == 0">
                                        <form class="mainForm">
                                            <div class="row formContainDiv">
                                                <div class="input-field col s12">
                                                    <input placeholder="What Institution did you attend" type="text" class="validate formInput">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                            
                                    <div v-if="attendedMedSch == 1">
                                        <form class="mainForm">
                                            <div class="row formContainDiv">
                                                <div class="input-field col s12">
                                                    <input placeholder="What degree" type="text" class="validate formInput">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                            
                                    <div v-if="attendedMedSch == 2">
                                        <form class="mainForm">
                                            <div class="row formInnerDiv">
                                                <div class="col s6">
                                                    <p class="schQuesP">When did you start</p>
                                                    <div class="row spaceAround">
                                                        <div class="col s3">
                                                            <p class="schQuesP1">Start</p>
                                                        </div>
                                                        <div class="input-field col s4 formInput1ColDiv">
                                                            <input placeholder="Month" type="text" class="validate formInput1">
                                                        </div>
                                                        <div class="input-field col s4 formInput1ColDiv">
                                                            <input placeholder="Year" type="text" class="validate formInput1">
                                                        </div>
                                                    </div>
                                                </div>
                            
                                                <div class=" col s5">
                                                    <p class="schQuesP">When did you end</p>
                                                    <div class="row spaceAround">
                                                        <div class="col s2">
                                                            <p class="schQuesP1">End</p>
                                                        </div>
                                                        <div class="input-field col s4 formInput1ColDiv">
                                                            <input placeholder="Month" type="text" class="validate formInput1">
                                                        </div>
                                                        <div class="input-field col s4 formInput1ColDiv">
                                                            <input placeholder="Year" type="text" class="validate formInput1">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            <!-- </div> -->
                        </div>
                    </div>

                    <!-- Internship Section -->
                    <div v-show="view == 5">
                        <!-- Internship Check -->
                        <div v-show="internshipCheck == 0">
                            <p class="contentTitle">Did you attend internship?</p>
                    
                            <div class="radioBtnMainDiv">
                                <p>
                                    <label @click="internSelected()">
                                        <input class="with-gap" name="intern" type="radio" />
                                        <span class="radioBtnSpan">Yes</span>
                                    </label>
                                </p>
                                <p>
                                    <label @click="internNotSelected()">
                                        <input class="with-gap" name="intern" type="radio" />
                                        <span class="radioBtnSpan">No</span>
                                    </label>
                                </p>
                            </div>
                        </div>

                        <div v-show="internshipCheck == 1">
                            <p class="contentTitle">Tell us about your internship program</p>

                            <form class="mainForm">
                                <div class="row formContainDiv">
                                    <div class="input-field col s12">
                                        <input placeholder="What Institution did you attend" type="text" class="validate formInput">
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div v-show="internshipCheck == 2">
                            <p class="contentTitle">Tell us about your internship program</p>
                        
                            <form class="mainForm">
                                <div class="row formInnerDiv">
                                    <div class="col s6">
                                        <p class="schQuesP">When did you start</p>
                                        <div class="row spaceAround">
                                            <div class="col s3">
                                                <p class="schQuesP1">Start</p>
                                            </div>
                                            <div class="input-field col s4 formInput1ColDiv">
                                                <input placeholder="Month" type="text" class="validate formInput1">
                                            </div>
                                            <div class="input-field col s4 formInput1ColDiv">
                                                <input placeholder="Year" type="text" class="validate formInput1">
                                            </div>
                                        </div>
                                    </div>
                            
                                    <div class=" col s5">
                                        <p class="schQuesP">When did you end</p>
                                        <div class="row spaceAround">
                                            <div class="col s2">
                                                <p class="schQuesP1">End</p>
                                            </div>
                                            <div class="input-field col s4 formInput1ColDiv">
                                                <input placeholder="Month" type="text" class="validate formInput1">
                                            </div>
                                            <div class="input-field col s4 formInput1ColDiv">
                                                <input placeholder="Year" type="text" class="validate formInput1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Fellowship Section -->
                    <div v-show="view == 6">
                        <!-- Fellowship Check -->
                        <div v-show="fellowshipCheck == 0">
                            <p class="contentTitle">Did you attended fellowship?</p>
                    
                            <div class="radioBtnMainDiv">
                                <p>
                                    <label @click="fellowSelected()">
                                        <input class="with-gap" name="intern" type="radio" />
                                        <span class="radioBtnSpan">Yes</span>
                                    </label>
                                </p>
                                <p>
                                    <label @click="fellowNotSelected()">
                                        <input class="with-gap" name="intern" type="radio" />
                                        <span class="radioBtnSpan">No</span>
                                    </label>
                                </p>
                            </div>
                        </div>
                    
                        <div v-show="fellowshipCheck == 1">
                            <p class="contentTitle">Tell us about your fellowship program</p>
                    
                            <form class="mainForm">
                                <div class="row formContainDiv">
                                    <div class="input-field col s12">
                                        <input placeholder="What Institution did you attend" type="text" class="validate formInput">
                                    </div>
                                </div>
                            </form>
                        </div>
                    
                        <div v-show="fellowshipCheck == 2">
                            <p class="contentTitle">Tell us about your fellowship program</p>
                    
                            <form class="mainForm">
                                <div class="row formInnerDiv">
                                    <div class="col s6">
                                        <p class="schQuesP">When did you start</p>
                                        <div class="row spaceAround">
                                            <div class="col s3">
                                                <p class="schQuesP1">Start</p>
                                            </div>
                                            <div class="input-field col s4 formInput1ColDiv">
                                                <input placeholder="Month" type="text" class="validate formInput1">
                                            </div>
                                            <div class="input-field col s4 formInput1ColDiv">
                                                <input placeholder="Year" type="text" class="validate formInput1">
                                            </div>
                                        </div>
                                    </div>
                    
                                    <div class=" col s5">
                                        <p class="schQuesP">When did you end</p>
                                        <div class="row spaceAround">
                                            <div class="col s2">
                                                <p class="schQuesP1">End</p>
                                            </div>
                                            <div class="input-field col s4 formInput1ColDiv">
                                                <input placeholder="Month" type="text" class="validate formInput1">
                                            </div>
                                            <div class="input-field col s4 formInput1ColDiv">
                                                <input placeholder="Year" type="text" class="validate formInput1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Residency Section -->
                    <div v-show="view == 7">
                        <!-- Residency Check -->
                        <div v-show="residencyCheck == 0">
                            <p class="contentTitle">Did you attended residency?</p>
                    
                            <div class="radioBtnMainDiv">
                                <p>
                                    <label @click="residencySelected()">
                                        <input class="with-gap" name="intern" type="radio" />
                                        <span class="radioBtnSpan">Yes</span>
                                    </label>
                                </p>
                                <p>
                                    <label @click="residencyNotSelected()">
                                        <input class="with-gap" name="intern" type="radio" />
                                        <span class="radioBtnSpan">No</span>
                                    </label>
                                </p>
                            </div>
                        </div>
                    
                        <div v-show="residencyCheck == 1">
                            <p class="contentTitle">Tell us about your residency program</p>
                    
                            <form class="mainForm">
                                <div class="row formContainDiv">
                                    <div class="input-field col s12">
                                        <input placeholder="What Institution did you attend" type="text" class="validate formInput">
                                    </div>
                                </div>
                            </form>
                        </div>
                    
                        <div v-show="residencyCheck == 2">
                            <p class="contentTitle">Tell us about your residency program</p>
                    
                            <form class="mainForm">
                                <div class="row formInnerDiv">
                                    <div class="col s6">
                                        <p class="schQuesP">When did you start</p>
                                        <div class="row spaceAround">
                                            <div class="col s3">
                                                <p class="schQuesP1">Start</p>
                                            </div>
                                            <div class="input-field col s4 formInput1ColDiv">
                                                <input placeholder="Month" type="text" class="validate formInput1">
                                            </div>
                                            <div class="input-field col s4 formInput1ColDiv">
                                                <input placeholder="Year" type="text" class="validate formInput1">
                                            </div>
                                        </div>
                                    </div>
                    
                                    <div class=" col s5">
                                        <p class="schQuesP">When did you end</p>
                                        <div class="row spaceAround">
                                            <div class="col s2">
                                                <p class="schQuesP1">End</p>
                                            </div>
                                            <div class="input-field col s4 formInput1ColDiv">
                                                <input placeholder="Month" type="text" class="validate formInput1">
                                            </div>
                                            <div class="input-field col s4 formInput1ColDiv">
                                                <input placeholder="Year" type="text" class="validate formInput1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Experience Section -->
                    <div v-show="view == 8">
                        <!-- Experience Check -->
                        <div v-show="experienceCheck == 0">
                            <p class="contentTitle">Tell us about your experience</p>
                            <form class="mainForm">
                                <div class="row formContainDiv">
                                    <div class="input-field col s12">
                                        <input placeholder="what hospital/medical/institutions" type="text" class="validate formInput">
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div v-show="experienceCheck == 1">
                            <p class="contentTitle">Tell us about your experience</p>
                            <form class="mainForm">
                                <div class="row formContainDiv">
                                    <div class="input-field col s12">
                                        <input placeholder="What is the location" type="text" class="validate formInput">
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div v-show="experienceCheck == 2">
                            <p class="contentTitle">Tell us about your experience</p>
                            <form class="mainForm">
                                <div class="row formContainDiv">
                                    <div class="input-field col s12">
                                        <input placeholder="What is your position" type="text" class="validate formInput">
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div v-show="experienceCheck == 3">
                            <p class="contentTitle">Tell us about your experience</p>
                            <form class="mainForm">
                                <div class="row formInnerDiv">
                                    <div class="col s6">
                                        <p class="schQuesP">When did you start</p>
                                        <div class="row spaceAround">
                                            <div class="col s3">
                                                <p class="schQuesP1">Start</p>
                                            </div>
                                            <div class="input-field col s4 formInput1ColDiv">
                                                <input placeholder="Month" type="text" class="validate formInput1">
                                            </div>
                                            <div class="input-field col s4 formInput1ColDiv">
                                                <input placeholder="Year" type="text" class="validate formInput1">
                                            </div>
                                        </div>
                                    </div>
                            
                                    <div class=" col s5">
                                        <p class="schQuesP">When did you end</p>
                                        <div class="row spaceAround">
                                            <div class="col s2">
                                                <p class="schQuesP1">End</p>
                                            </div>
                                            <div class="input-field col s4 formInput1ColDiv">
                                                <input placeholder="Month" type="text" class="validate formInput1">
                                            </div>
                                            <div class="input-field col s4 formInput1ColDiv">
                                                <input placeholder="Year" type="text" class="validate formInput1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div v-show="experienceCheck == 4">
                            <p class="contentTitle">Do you want to add more experience</p>
                            <div class="radioBtnMainDiv">
                                <p>
                                    <label @click="expSelected()">
                                        <input class="with-gap" name="intern" type="radio" />
                                        <span class="radioBtnSpan">Yes</span>
                                    </label>
                                </p>
                                <p>
                                    <label @click="expNotSelected()">
                                        <input class="with-gap" name="intern" type="radio" />
                                        <span class="radioBtnSpan">No</span>
                                    </label>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Add More Quarifications Section -->
                    <div v-show="view == 9">
                        <div v-show="addQualificaion == 0">
                            <p class="contentTitle">Do you have additional academic qualifications</p>
                            <div class="radioBtnMainDiv">
                                <p>
                                    <label @click="addQualSelected()">
                                        <input class="with-gap" name="intern" type="radio" />
                                        <span class="radioBtnSpan">Yes</span>
                                    </label>
                                </p>
                                <p>
                                    <label @click="addQualNotSelected()">
                                        <input class="with-gap" name="intern" type="radio" />
                                        <span class="radioBtnSpan">No</span>
                                    </label>
                                </p>
                            </div>
                        </div>

                        <div v-show="addQualificaion == 1">
                            <p class="contentTitle">Tell us about your academic qualifications</p>

                            <form class="mainForm">
                                <div class="row formContainDiv">
                                    <div class="input-field col s12">
                                        <input placeholder="What institutions" type="text" class="validate formInput">
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div v-show="addQualificaion == 2">
                            <p class="contentTitle">Tell us about your academic qualifications</p>

                            <form class="mainForm">
                                <div class="row formContainDiv">
                                    <div class="input-field col s12">
                                        <input placeholder="What degree" type="text" class="validate formInput">
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div v-show="addQualificaion == 3">
                            <p class="contentTitle">Tell us about your residency program</p>
                        
                            <form class="mainForm">
                                <div class="row formInnerDiv">
                                    <div class="col s6">
                                        <p class="schQuesP">When did you start</p>
                                        <div class="row spaceAround">
                                            <div class="col s3">
                                                <p class="schQuesP1">Start</p>
                                            </div>
                                            <div class="input-field col s4 formInput1ColDiv">
                                                <input placeholder="Month" type="text" class="validate formInput1">
                                            </div>
                                            <div class="input-field col s4 formInput1ColDiv">
                                                <input placeholder="Year" type="text" class="validate formInput1">
                                            </div>
                                        </div>
                                    </div>
                            
                                    <div class=" col s5">
                                        <p class="schQuesP">When did you end</p>
                                        <div class="row spaceAround">
                                            <div class="col s2">
                                                <p class="schQuesP1">End</p>
                                            </div>
                                            <div class="input-field col s4 formInput1ColDiv">
                                                <input placeholder="Month" type="text" class="validate formInput1">
                                            </div>
                                            <div class="input-field col s4 formInput1ColDiv">
                                                <input placeholder="Year" type="text" class="validate formInput1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div v-show="addQualificaion == 4">
                            <p class="contentTitle">Do you want to add more additional qualifications</p>
                        
                            <div class="radioBtnMainDiv">
                                <p>
                                    <label @click="addMoreQualSelected()">
                                        <input class="with-gap" name="intern" type="radio" />
                                        <span class="radioBtnSpan">Yes</span>
                                    </label>
                                </p>
                                <p>
                                    <label @click="addMoreQualNotSelected()">
                                        <input class="with-gap" name="intern" type="radio" />
                                        <span class="radioBtnSpan">No</span>
                                    </label>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Service Section -->
                    <div v-show="view == 10">
                        Services
                    </div>

                    <!-- Prev/Next Button Section -->
                    <div>
                        <div v-if="view > 0 && view <= 3" class="skipDiv">
                            <button class="skipBtn" @click="prev()" :disabled="view <= 1" :class="view > 1 ? 'btnOn' : 'btnOff'">
                                <i class="material-icons">keyboard_arrow_left</i>
                            </button>
                            <span class="skipTxt">skip</span>
                            <button class="skipBtn" @click="next()" :disabled="view == view.length" :class="view != 4 ? 'btnOn' : 'btnOff'">
                                <i class="material-icons">keyboard_arrow_right</i>
                            </button>
                    
                            <!-- <i class="material-icons skipBtnIcon" @click="prev()">keyboard_arrow_left</i>
                            <span class="skipTxt">skip</span>
                            <i class="material-icons skipBtnIcon" @click="next()">keyboard_arrow_right</i> -->
                        </div>
                        <div v-if="view == 4 && academicCheck == 1">
                            <div class="skipDiv">
                                <button class="skipBtn" @click="prev1()" :disabled="academicCheck == 0"
                                    :class="attendedSchInfo > 0 ? 'btnOn' : 'btnOff'">
                                    <i class="material-icons">keyboard_arrow_left</i>
                                </button>
                                <span class="skipTxt">skip</span>
                                <button class="skipBtn" @click="next1()" :disabled="academicCheck == academicCheck.length"
                                    :class="attendedSchInfo != 3 ? 'btnOn' : 'btnOff'">
                                    <i class="material-icons">keyboard_arrow_right</i>
                                </button>
                            </div>
                        </div>
                        <div v-if="view == 4 && academicCheck == 2 && attendedMedSch <= 2">
                            <div class="skipDiv">
                                <button class="skipBtn" @click="prev2()" :disabled="academicCheck == 0"
                                    :class="attendedMedSch > 0 ? 'btnOn' : 'btnOff'">
                                    <i class="material-icons">keyboard_arrow_left</i>
                                </button>
                                <span class="skipTxt">skip</span>
                                <button class="skipBtn" @click="next2()" :disabled="academicCheck == academicCheck.length"
                                    :class="attendedMedSch != 3 ? 'btnOn' : 'btnOff'">
                                    <i class="material-icons">keyboard_arrow_right</i>
                                </button>
                            </div>
                        </div>
                        <div v-if="view == 5">
                            <div class="skipDiv">
                                <button class="skipBtn" 
                                    @click="prev3()" 
                                    :disabled="internshipCheck == 0"
                                    :class="internshipCheck > 0 ? 'btnOn' : 'btnOff'"
                                >
                                    <i class="material-icons">keyboard_arrow_left</i>
                                </button>
                                    <span class="skipTxt">skip</span>
                                <button class="skipBtn" @click="next3()" 
                                    :disabled="internshipCheck == 0"
                                    :class="internshipCheck < 1 ? 'btnOff' : 'btnOn'"
                                >
                                    <i class="material-icons">keyboard_arrow_right</i>
                                </button>
                            </div>
                        </div>
                        <div v-if="view == 6">
                            <div class="skipDiv">
                                <button class="skipBtn" @click="prev4()" :disabled="fellowshipCheck == 0"
                                    :class="fellowshipCheck > 0 ? 'btnOn' : 'btnOff'">
                                    <i class="material-icons">keyboard_arrow_left</i>
                                </button>
                                <span class="skipTxt">skip</span>
                                <button class="skipBtn" @click="next4()" :disabled="fellowshipCheck == 0"
                                    :class="fellowshipCheck < 1 ? 'btnOff' : 'btnOn'">
                                    <i class="material-icons">keyboard_arrow_right</i>
                                </button>
                            </div>
                        </div>
                        <div v-if="view == 7">
                            <div class="skipDiv">
                                <button class="skipBtn" @click="prev5()" :disabled="residencyCheck == 0"
                                    :class="residencyCheck > 0 ? 'btnOn' : 'btnOff'">
                                    <i class="material-icons">keyboard_arrow_left</i>
                                </button>
                                <span class="skipTxt">skip</span>
                                <button class="skipBtn" @click="next5()" :disabled="residencyCheck == 0"
                                    :class="residencyCheck < 1 ? 'btnOff' : 'btnOn'">
                                    <i class="material-icons">keyboard_arrow_right</i>
                                </button>
                            </div>
                        </div>
                        <div v-if="view == 8">
                            <div class="skipDiv">
                                <button class="skipBtn" 
                                    @click="prev6()" 
                                    :disabled="experienceCheck == 0"
                                    :class="experienceCheck > 0 ? 'btnOn' : 'btnOff'"
                                >
                                    <i class="material-icons">keyboard_arrow_left</i>
                                </button>
                                    <span class="skipTxt">skip</span>
                                <button class="skipBtn" 
                                    @click="next6()" 
                                    :disabled="experienceCheck > 4"
                                    :class="experienceCheck > 4 ? 'btnOff' : 'btnOn'"
                                >
                                    <i class="material-icons">keyboard_arrow_right</i>
                                </button>
                            </div>
                        </div>
                        <div v-if="view == 9">
                            <div class="skipDiv">
                                <button class="skipBtn" @click="prev7()" 
                                    :disabled="addQualificaion == 0"
                                    :class="addQualificaion > 0 ? 'btnOn' : 'btnOff'"
                                >
                                        <i class="material-icons">keyboard_arrow_left</i>
                                </button>
                                    <span class="skipTxt">skip</span>
                                <button class="skipBtn" @click="next7()" 
                                    :disabled="addQualificaion > 5"
                                    :class="addQualificaion > 5 ? 'btnOff' : 'btnOn'"
                                >
                                    <i class="material-icons">keyboard_arrow_right</i>
                                </button>
                            </div>
                        </div>
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
            academicCheck: 0,
            attendedSchInfo: 0,
            attendedMedSch: 0,

            internshipCheck: 0,
            fellowshipCheck: 0,
            residencyCheck: 0,
            experienceCheck: 0,
            addQualificaion: 0,
        };
    },
    mounted() { },
    methods: {
        prev() {
            this.view != 0 ? this.view-- : null;
        },
        next() {
            this.view != 4 ? this.view++ : null;
        },
        getStarted() {
            this.view = 1;
        },
        undergradMedSelected() {
            this.academicCheck = 1;
        },
        medSelected() {
            this.academicCheck = 2;
        },
        prev1() {
            this.attendedSchInfo != 0 ? this.attendedSchInfo-- : null;
        },
        next1() {
            this.attendedSchInfo != 3 ? this.attendedSchInfo++ : null;

            if (this.attendedSchInfo >= 3) {
                this.academicCheck = 2;
            }
        },
        prev2() {
            this.attendedMedSch != 0 ? this.attendedMedSch-- : null;
        },
        next2() {
            this.attendedMedSch != 3 ? this.attendedMedSch++ : null;

            if (this.attendedMedSch == 2) {
                this.view = 5;
            }
        },
        internSelected() {
            this.internshipCheck = 1;
        },
        internNotSelected() {
            this.view = 6;
        },
        prev3() {
            this.internshipCheck != 0 ? this.internshipCheck-- : null;
        },
        next3() {
            this.internshipCheck != 3 ? this.internshipCheck++ : null;

            if (this.internshipCheck >= 3) {
                this.view = 6;
            }
        },
        prev4() {
            this.fellowshipCheck != 0 ? this.fellowshipCheck-- : null;
        },
        next4() {
            this.fellowshipCheck != 3 ? this.fellowshipCheck++ : null;

            if (this.fellowshipCheck >= 3) {
                this.view = 7;
            }
        },
        fellowSelected() {
            this.fellowshipCheck = 1;
        },
        fellowNotSelected() {
            this.view = 7;
        },
        residencySelected() {
            this.residencyCheck = 1;
        },
        residencyNotSelected() {
            this.view = 8;
        },
        prev5() {
            this.residencyCheck != 0 ? this.residencyCheck-- : null;
        }, 
        next5() {
            this.residencyCheck != 3 ? this.residencyCheck++ : null;

            if (this.residencyCheck >= 3) {
                this.view = 8;
            }
        },
        prev6() {
            this.experienceCheck != 0 ? this.experienceCheck-- : null;
        },
        next6() {
            this.experienceCheck != 5 ? this.experienceCheck++ : null;

            if (this.experienceCheck >= 5) {
                this.view = 9;
            } 
        },
        expSelected() {
            this.experienceCheck = 0;
        }, 
        expNotSelected() {
            this.view = 9;
        },
        prev7() {
            this.addQualificaion != 0 ? this.addQualificaion-- : null;
        },
        next7() {
            this.addQualificaion != 5 ? this.addQualificaion++ : null;

            if (this.addQualificaion >= 5) {
                this.view = 10;
            }
        },
        addQualSelected() {
            this.addQualificaion = 1;
        },
        addQualNotSelected() {
            this.view = 10;
        }, 
        addMoreQualSelected() {
            this.addQualificaion = 1;
        },
        addMoreQualNotSelected() {
            this.view = 10;
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