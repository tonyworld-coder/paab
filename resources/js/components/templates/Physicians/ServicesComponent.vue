<template>
    <div id="templateService" class="row">
        <div class="col s12 rm_mg_pd">
            <div class="section scrollspy physiContainerDiv" id="services">
                <div v-if="services == null || services.length === 0">
                    <div class="row whatIdoTxtRowDiv">
                        <div class="col s12">
                            <p class="servicesMainTitle">Services</p>
                            <p class="servicesWhatIdo">WHAT I DO</p>
                            <h3 class="title">
                                WHAT I DO
                                <span class="primaryColorBoxDesign1"></span>
                            </h3>

                            <div>
                                <!-- Services Modal Trigger -->
                                <a class="modal-trigger servicesEditBtn" href="#servicesEditModal" title="Edit Services">
                                    <i class="material-icons editIcon">edit</i>
                                </a>
                                
                                <!-- Services Modal Structure -->
                                <div id="servicesEditModal" class="modal">
                                    <div class="modal-content">
                                        <div class="aboutWriteUpsEditModalInnerDiv">
                                            <a href="#!" class="modal-close editWriteUpsModalCloseBtn">
                                                <i class="material-icons">keyboard_arrow_left</i>
                                            </a>
                                            <a href="#!" class="servicesAddMoreBtn">ADD MORE</a>
                                            <form>
                                                <div class="row rm_mg">
                                                    <div class="input-field col s12">
                                                        <input type="text" value="Service One" class="validate aboutWriteUpsInput">
                                                    </div>
                                                    <div class="input-field col s12 rm_mg">
                                                        <textarea class="materialize-textarea servicesTextarea" placeholder="description"></textarea>
                                                    </div>
                                                </div>
                                
                                            </form>
                                            <p class="aboutWriteUpsSize">Description should not be more than 200 characters</p>
                                            <div class="editWriteUpsSaveBtnDiv">
                                                <a href="#" class="editWriteUpsSaveBtn">
                                                    Save
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="servicesRw">
                            <div class="col s12 m4 l4">
                                <h5 class="servcesHeading forSurgeon">
                                    <span class="whatIdoServiceTitleNum">01.</span>
                                    Service
                                </h5>
                                <div class="servicesIconsDiv">
                                    <i
                                        class="
                                            fa-solid fa-briefcase-medical
                                            servicesIcons1
                                        "
                                    ></i>
                                </div>

                                <p class="servcesHeading forDoc">Service One</p>

                                <p class="servicesTxt">
                                    Contrary to popular belief, Lorem Ipsum is not
                                    simply random text. It has roots in a piece of
                                    classical Latin literature from 45 BC, making it
                                    over 2000 years old. Richard McClintock, a Latin
                                    professor at Hampden-Sydney College in Virginia
                                </p>
                            </div>

                            <div class="col s12 m4 l4">
                                <h5 class="servcesHeading forSurgeon">
                                    <span class="whatIdoServiceTitleNum">02.</span>
                                    Service
                                </h5>
                                <div class="servicesIconsDiv">
                                    <i class="fa-solid fa-briefcase-medical servicesIcons1"></i>
                                </div>

                                <p class="servcesHeading forDoc">Service Two</p>

                                <p class="servicesTxt">
                                    Contrary to popular belief, Lorem Ipsum is not
                                    simply random text. It has roots in a piece of
                                    classical Latin literature from 45 BC, making it
                                    over 2000 years old. Richard McClintock, a Latin
                                    professor at Hampden-Sydney College in Virginia
                                </p>
                            </div>

                            <div class="col s12 m4 l4">
                                <h5 class="servcesHeading forSurgeon">
                                    <span class="whatIdoServiceTitleNum">03.</span>
                                    Service
                                </h5>
                                <div class="servicesIconsDiv">
                                    <i
                                        class="
                                            fa-sharp fa-solid fa-briefcase-medical
                                            servicesIcons2
                                        "
                                    ></i>
                                </div>

                                <p class="servcesHeading forDoc">Service Three</p>

                                <p class="servicesTxt">
                                    Contrary to popular belief, Lorem Ipsum is not
                                    simply random text. It has roots in a piece of
                                    classical Latin literature from 45 BC, making it
                                    over 2000 years old. Richard McClintock, a Latin
                                    professor at Hampden-Sydney College in Virginia
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div v-else>
                    <div class="row whatIdoTxtRowDiv">
                        <div class="col s12">
                            <p class="servicesMainTitle">Services</p>
                            <p class="servicesWhatIdo">WHAT I DO</p>
                            <h3 class="title">
                                WHAT I DO
                                <span class="primaryColorBoxDesign1"></span>
                            </h3>
                        </div>
                        <div
                            :class="{ flexed: services.length <= 2 }"
                            class="row"
                        >
                            <div
                                class="col m4 l4 m-0"
                                v-for="(service, index) in services"
                                :key="service.id"
                            >
                                <h5 class="servcesHeading forSurgeon">
                                    <span class="whatIdoServiceTitleNum">0{{index}}.</span>
                                    {{ service.title }}
                                </h5>
                                <div class="servicesIconsDiv">
                                    <i
                                        class="
                                            fa-solid fa-briefcase-medical
                                            servicesIcons1
                                        "
                                        :class="service.icon"
                                    ></i>
                                </div>
                                <p class="servcesHeading forDoc">{{ service.title }}</p>
                                <p class="servicesTxt">
                                    {{ service.description }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        props: {
            services: Array,
        },
    };
</script>
<style scoped>
    @media only screen and (min-width: 1200px) {
        .flexed {
            display: flex;
            justify-content: center;
        }
        .ml-0,
        .row .col.m4 {
            margin-left: 0 !important;
        }
    }
    @media only screen and (min-width: 993px) {
        .flexed {
            display: flex;
            justify-content: center;
        }
        .ml-0,
        .row .col.m4 {
            margin-left: 0 !important;
        }
    }
</style>