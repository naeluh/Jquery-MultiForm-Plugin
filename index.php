<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>former</title>
</head>

<body>
<div class="columnWrap cols2-728-224">
    <h1>School Visit Request</h1>

    <form id="form-school_form-registration" name="form-school_form-registration" method="post" >
     <input type="hidden" name="formType" value="schoolvisit" />
    <div class="formblock">

    <div id="return" style="display:none;">Reset Form</div>



    <!-- Group Question Start-->
    <div id="page1">
                    <div style="margin-top: 0px;">
                        &nbsp;
                    </div>
                    <div id="school_form_selection question-0" style="display:block;">
                        <h2>What kind of organization are you?&nbsp;</h2>
                        <p>
                            <fieldset>
                                <select name="select_group_type" id="select_group_type" class="required sel-5" style="width:800px;">
                                    <option>Choose</option>
                                    <option value="Accredited California">Accredited California School</option>
                                    <option value="Head Start or Child Development Center">Head Start or Child Development Center</option>
                                    <option value="Preschool (students are 2+ years)">Preschool (students are 2+ years)</option>
                                    <option value="Club">Club, after school program or non-profit located at a school site and providing academic instruction to students.</option>
                                    <option value="Accredited School outside">Accredited School outside of California or the United States</option>
                                    <option value="Unaccredited School">Unaccredited School</option>
                                    <option value="Day care">Daycare/Childcare</option>
                                    <option value="Homeschool">Homeschool</option>
                                    <option value="non-profit">Non-profit, not located on a school site.</option>
                                </select>
                            </fieldset>
                        </p>
                    </div>
    </div>
    <!-- Group Question End-->
    <!-- Private or Preschool Question Start-->
    <div id="page2" style="display:none;">
                    <div style="margin-top: 0px;">
                        &nbsp;
                    </div>
                    <div id="question-1">
                        <h2>Are you a Private School or Preschool?&nbsp;</h2>
                        <em>Preschools include Child Development Centers and Head Starts</em>
                        <p>
                            <input type="radio" name="radio_is_pp" value="yes"/>Yes <input type="radio" name="radio_is_pp" value="no"/>No
                        </p>
            </div>
    </div>
    <!-- Private or Preschool Question End-->

    <!-- District Question Start-->
    <div id="page3">
                <div id="school_form-district-choice" style="display:none;">


                        <h2>Does this school belong to one of the districts listed below?&nbsp;</h2>
                        <p>
                            <input type="radio" name="radio_is_district" value="yes"/>Yes <input type="radio" name="radio_is_district" value="no"/>No
                            <ul>
                                <li>Los Angeles Unified School District</li>
                                <li>Montebello Unified School District</li>
                                <li>ABC Unified School District</li>
                                <li>Alhambra Unified School District</li>
                                <li>Covina Valley Unified School District</li>
                                <li>Paramount Unified School District</li>
                                <li>El Monte City School District</li>
                                <li>Garvey School District</li>
                                <li>Long Beach Unified School District</li>
                                <li>Santa Ana Unified School District</li>
                                <li>Sulpher Springs School District</li>
                            </ul>
                        </p>

                </div>
    <!-- District Question Start-->
                <div id="school_form-district-other" style="display:none;">

                        <h2>Please write your district below&nbsp;</h2>

                            <fieldset>
                            <label for="text_is_district">District:</label>
                            <div class="customInput"><input type="text" name="text_is_district" id="text_is_district" value=""/></div>
                            </fieldset>
                             <div class="bl_button">
                                <a class="district_continue btn boxed" name="#">Continue</a>
                            </div>


                </div>
    </div>
    <!-- District Question End-->


    <!-- Bus Question Start-->
    <div id="page4" style="display:none;">
                <div style="margin-top: 0px;">
                    &nbsp;
                </div>
                <div id="question-3">
                    <h2>Are you using a bus from your district?&nbsp;</h2>
                    <em>If the bus is funded by another party but is a part of the district fleet, choose yes.&nbsp;</em>
                    <p>
                        <input type="radio" name="radio_is_bus" value="yes"/>Yes <input type="radio" name="radio_is_bus" value="no"/>No
                    </p>
                </div>
            </div>
            <div id="school_form-district-bus" style="display:none;">

                    <h2>Please write your district below?&nbsp;</h2>

                        <fieldset>
                        <label for="text_is_district_bus" >District:</label>
                        <div class="customInput"><input type="text" name="text_is_district_bus" id="text_is_district_bus" value=""/></div>
                        </fieldset>
            <div class="bl_button">
                            <a class="district_continue btn boxed" name="#" >Continue</a>
            </div>

    </div>

    <!-- Bus Question End-->


    <!-- District List Question End-->
    <div id="page5" style="display:none;">
                <div style="margin-top: 0px;">
                    &nbsp;
                </div>
                <div id="question-2b">
                    <h2>Please specify your district below:&nbsp;</h2>
                    <div>
                        <select name="select_district_list" id="select_district_list" class="required sel-3" style="width:308px;">
                            <option value="" selected="selected">Choose</option>
                            <option value="Los Angeles Unified School District">Los Angeles Unified School District</option>
                            <option value="Montebello Unified School District">Montebello Unified School District</option>
                            <option value="ABC Unified School District">ABC Unified School District</option>
                            <option value="Alhambra Unified School District">Alhambra Unified School District</option>
                            <option value="Covina Valley Unified School District">Covina Valley Unified School District</option>
                            <option value="Paramount Unified School District">Paramount Unified School District</option>
                            <option value="El Monte City School District">El Monte City School District</option>
                            <option value="Garvey School District">Garvey School District</option>
                            <option value="Long Beach Unified School District">Long Beach Unified School District</option>
                            <option value="Santa Ana Unified School District">Santa Ana Unified School District</option>
                            <option value="Sulpher Springs School District">Sulpher Springs School District</option>
                        </select>
                    </div>
                </div>
    </div>
    <!-- District List Question End-->


    <!-- Organization Question Start-->
    <div id="page6" style="display:none;">
                <div id="school_form-organization-choice">
                    <div id="school_form_selection">
                        <h2>Select your organization type:&nbsp;</h2>
                        <p>
                            <select name="select_organization_type" id="select_organization_type" class="required sel-3" style="width:308px;">
                                <option value="" selected="selected">Choose</option>
                                <option value="Head Start">Head Start</option>
                                <option value="Child Development Center">Child Development Center</option>
                                <option value="Preschool">Preschool</option>
                                <option value="Private">Private School</option>
                            </select>
                        </p>
                    </div>
                </div>
                <div id="school_form-organization-other">
                    <div style="margin-top: 0px;">
                        &nbsp;
                    </div>
                    <div id="school_form_selection">
                        <div id="other_organization">
                            <fieldset>
                            <label>Other:</label>
                            <div class="customInput"><input type="text" name="select_is_other" id="select_is_other" class="required"/></div>
                            </fieldset>
                            <div class="bl_button">
                                <a class="organization_continue btn boxed" name="#"  >Continue</a>
                            </div>
                        </div>
                    </p>
                </div>
            </div>
    </div>
    <!-- Organization Question End-->


    <!-- Scholarship Question Start-->
    <div id="page7" style="display:none;">
            <div style="margin-top: 0px;">
                &nbsp;
            </div>
            <div id="question-5">
                <h2>Do you have a Page Bus Scholarship?&nbsp;</h2>
                <p>
                    <input type="radio" name="radio_is_scholar" value="yes"/>Yes <input type="radio" name="radio_is_scholar" value="no"/>No
                </p>
            </div>
        </div>
        <div id="school_form-scholar-number" style="display:none;">
                <fieldset>
                <label>Please provide your Page Bus Scholarship Award Number:</label>
                <div class="customInput"><input name="select_is_scholar_number" id="select_is_scholar_number" value=""/></div>
                </fieldset>
            <div class="bl_button">
                    <a class="scholar_continue btn boxed" name="#" onclick="checkScholar()">Continue</a>
            </div>
    </div>
    <!-- Scholarship Question End-->


    <!-- 3 choices for times to vist Start -->
    <div id="page8" style="display:none;">
            <h2>Please Select 3 dates to visit&nbsp;</h2>
            <em>Three dates allow us to book you on an alternate date if your first choice is full. <br>
             If you are only able to come on your first choice date, please check the box below. </em>
            <table>
            <tr>
                <td class="visit1_date_error select_visit1_hour_error select_visit1_minute_error">
                    <u>*</u> School Visit Date &amp; Time <br/>(1st choice):
                </td>
                <td>
                    <div class="customInput"><input type="text" class="date-pick textfield2 required" id="visit1_date" name="visit1_date" maxlength="16" value=""/></div>
                    <select name="select_visit1_hour" id="select_visit1_hour" class="hour-pick required sel-1" style="width:116px;" >
                        <option value="">&lt; Hour &gt;</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                    <select name="select_visit1_minute" id="select_visit1_minute" class="minute-pick required sel-1" style="width:116px;">
                        <option value="">&lt; Min &gt;</option>
                        <option value="00">00</option>
                        <option value="15">15</option>
                        <option value="30">30</option>
                        <option value="45">45</option>
                    </select>
                    &nbsp;
                    <div id="visit1_am_pm_div" style="display: inline; font-weight:bold;">
                    </div>
                    <input type="hidden" name="visit1_am_pm" id="visit1_am_pm" class="am-pm-pick" value=""/>
                    <!--div style="font-size:11px; width:340px;">(All school visits are self-guided.  School visits are <br />available from 9:30 - 2:00, Monday - Friday.)</div-->
                </td>
            </tr>
            <tr>
                <td class="visit2_date_error select_visit2_hour_error select_visit2_minute_error">
                    <u>*</u> School Visit Date &amp; Time <br/>(2nd choice):
                </td>
                <td>
                    <div class="customInput"><input type="text" class="date-pick textfield2 required" id="visit2_date" name="visit2_date" maxlength="16" value=""/></div>
                    <select name="select_visit2_hour" id="select_visit2_hour" class="hour-pick required sel-1" style="width:116px;">
                        <option value="">&lt; Hour &gt;</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                    <select name="select_visit2_minute" id="select_visit2_minute" class="minute-pick required sel-1" style="width:116px;">
                        <option value="">&lt; Min &gt;</option>
                        <option value="00">00</option>
                        <option value="15">15</option>
                        <option value="30">30</option>
                        <option value="45">45</option>
                    </select>
                    &nbsp;
                    <div id="visit2_am_pm_div" style="display: inline; font-weight:bold;">
                    </div>
                    <input type="hidden" name="visit2_am_pm" id="visit2_am_pm" class="am-pm-pick" value=""/>
                </td>
            </tr>
            <tr>
                <td class="visit3_date_error select_visit3_hour_error select_visit3_minute_error">
                    <u>*</u> School Visit Date &amp; Time <br/>(3rd choice):
                </td>
                <td>
                    <div class="customInput"><input type="text" class="date-pick textfield2 required" id="visit3_date" name="visit3_date" maxlength="16" value=""/></div>
                    <select name="select_visit3_hour" id="select_visit3_hour" class="hour-pick required sel-1" style="width:116px;">
                        <option value="">&lt; Hour &gt;</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                    <select name="select_visit3_minute" id="select_visit3_minute" class="minute-pick required sel-1" style="width:116px;">
                        <option value="">&lt; Min &gt;</option>
                        <option value="00">00</option>
                        <option value="15">15</option>
                        <option value="30">30</option>
                        <option value="45">45</option>
                    </select>
                    &nbsp;
                    <div id="visit3_am_pm_div" style="display: inline; font-weight:bold;">
                    </div>
                    <input type="hidden" name="visit3_am_pm" id="visit3_am_pm" class="am-pm-pick" value=""/>
                </td>
            </tr>
            <tr>
                <td class="select_stay_time_error">
                    What time does your group plan on leaving the museum?
                </td>
                <td>
                    <select name="select_stay_time" id="select_stay_time" class="required sel-1" style="width:116px;">
                        <option value="">Choose</option>
                        <option value="11am">11:00am</option>
                        <option value="12pm">12:00pm</option>
                        <option value="1pm">1:00pm</option>
                        <option value="2pm">2:00pm</option>
                        <option value="3pm">3:00pm</option>
                        <option value="4pm">4:00pm</option>
                        <option value="5pm">5:00pm</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Our school can only visit on the first date
                </td>
                <td>
                    <input type="checkbox" id="first_choice_date" name="first_choice_date"/>
                </td>
            </tr>
            </table>
            <div class="bl_button">
                <a class="time_continue btn boxed" name="#" onclick="checkDatesone()">Continue</a>
            </div>
    </div>
    <!-- 3 choices for times to vist End -->


    <!-- Grades Question Start-->
    <div id="page9" style="display:none;">
         <h2>How many students are you bringing from each grade?</h2>
     <em style="margin-bottom:10px;">We require a minimum of 10 students to qualify for a school visit.</em>

        <div id="select_grade_limit_both">
            <!-- start k5 -->
            <div id="select_grade_limit_k_5">
                <div class="bl_200px select_grade_set_1_error"> <u>*</u>Grades Pre-K – 5</div>


                <fieldset style="padding-bottom:8px;display:block;" id="grade_level_set_1">
                <label>Number of Students:</label>
                <div class="customInput"><input type="text" class="textfield2 required" id="number_students_set_1" maxlength="4" name="number_students_set_1" /></div>
                    <select name="select_grade_set_1" id="select_grade_set_1" class="required sel-1" style="width:116px;">
                        <option value="">&lt; Grade &gt;</option>
                        <option value="Pre-K">Pre-K</option>
                        <option value="K">K</option>
                        <option value="1st">1st</option>
                        <option value="2nd">2nd</option>
                        <option value="3rd">3rd</option>
                        <option value="4th">4th</option>
                        <option value="5th">5th</option>
                    </select>
                </fieldset>

                <fieldset style="padding-bottom:8px;display:none;" id="grade_level_set_2">
                <label>Number of Students:</label>
                <div class="customInput"><input type="text" class="textfield2" id="number_students_set_2" name="number_students_set_2" maxlength="4" /></div>
                    <select name="select_grade_set_2" id="select_grade_set_2" class="sel-1" style="width:116px;">
                        <option value="">&lt; Grade &gt;</option>
                        <option value="Pre-K">Pre-K</option>
                        <option value="K">K</option>
                        <option value="1st">1st</option>
                        <option value="2nd">2nd</option>
                        <option value="3rd">3rd</option>
                        <option value="4th">4th</option>
                        <option value="5th">5th</option>
                    </select>
                <div id="remove_set_2" style="display:none; clear:none;">&nbsp; <a name="#" class="btn boxed" onclick="removeGrade()" style="cursor:pointer; font-size:10px; font-weight:bold;">remove</a> </div>
                </fieldset>

                <fieldset style="padding-bottom:8px;display:none;" id="grade_level_set_3">
                    <label>Number of Students:</label>
                     <div class="customInput"><input type="text" class="textfield2" id="number_students_set_3" name="number_students_set_3" maxlength="4" /></div>
                    <select name="select_grade_set_3" id="select_grade_set_3" class="sel-1" style="width:116px;">
                        <option value="">&lt; Grade &gt;</option>
                        <option value="Pre-K">Pre-K</option>
                        <option value="K">K</option>
                        <option value="1st">1st</option>
                        <option value="2nd">2nd</option>
                        <option value="3rd">3rd</option>
                        <option value="4th">4th</option>
                        <option value="5th">5th</option>
                    </select>
                <div id="remove_set_3" style="display:none;">&nbsp; <a name="#" class="btn boxed" onclick="removeGrade()" style="cursor:pointer; font-size:10px; font-weight:bold;">remove</a> </div>
                </fieldset>

                <fieldset style="padding-bottom:8px;display:none;" id="grade_level_set_4">
                    <label>Number of Students:</label>
                    <div class="customInput"><input type="text" class="textfield2" id="number_students_set_4" name="number_students_set_4" maxlength="4" /></div>
                    <select name="select_grade_set_4" id="select_grade_set_4" class="sel-1" style="width:116px;">
                        <option value="">&lt; Grade &gt;</option>
                        <option value="Pre-K">Pre-K</option>
                        <option value="K">K</option>
                        <option value="1st">1st</option>
                        <option value="2nd">2nd</option>
                        <option value="3rd">3rd</option>
                        <option value="4th">4th</option>
                        <option value="5th">5th</option>
                    </select>
                <div id="remove_set_4" style="display:none; clear:none;">&nbsp; <a name="#" class="btn boxed" onclick="removeGrade()" style="cursor:pointer;  font-size:10px; font-weight:bold;">remove</a> </div>
                </fieldset>

                <fieldset style="padding-bottom:8px;display:none;" id="grade_level_set_5">
                    <label>Number of Students:</label>
                    <div class="customInput"><input type="text" class="textfield2" id="number_students_set_5" name="number_students_set_5" maxlength="4" /></div>
                    <select name="select_grade_set_5" id="select_grade_set_5" class="sel-1" style="width:116px;">
                        <option value="">&lt; Grade &gt;</option>
                        <option value="Pre-K">Pre-K</option>
                        <option value="K">K</option>
                        <option value="1st">1st</option>
                        <option value="2nd">2nd</option>
                        <option value="3rd">3rd</option>
                        <option value="4th">4th</option>
                        <option value="5th">5th</option>
                    </select>
                <div id="remove_set_5" style="display:none;">&nbsp; <a name="#" class="btn boxed" onclick="removeGrade()" style="cursor:pointer; font-size:10px; font-weight:bold;">remove</a> </div>
                </fieldset>

                <fieldset style="padding-bottom:8px;display:none;" id="grade_level_set_6">
                    <label>Number of Students:</label>
                    <div class="customInput"><input type="text" class="textfield2" id="number_students_set_6" name="number_students_set_6" maxlength="4" /></div>
                    <select name="select_grade_set_6" id="select_grade_set_6" class="sel-1" style="width:116px;">
                        <option value="">&lt; Grade &gt;</option>
                        <option value="Pre-K">Pre-K</option>
                        <option value="K">K</option>
                        <option value="1st">1st</option>
                        <option value="2nd">2nd</option>
                        <option value="3rd">3rd</option>
                        <option value="4th">4th</option>
                        <option value="5th">5th</option>
                    </select>
                 <div id="remove_set_6" style="display:none;">&nbsp; <a name="#" class="btn boxed" onclick="removeGrade()" style="cursor:pointer; font-size:10px; font-weight:bold;">remove</a> </div>
                </fieldset>

                <fieldset style="padding-bottom:8px;display:none;" id="grade_level_set_7">
                <label>Number of Students:</label>
                <div class="customInput"><input type="text" class="textfield2" id="number_students_set_7" name="number_students_set_7" maxlength="4" /></div>
                <select name="select_grade_set_7" id="select_grade_set_7" class="sel-1" style="width:116px;">
                        <option value="">&lt; Grade &gt;</option>
                        <option value="Pre-K">Pre-K</option>
                        <option value="K">K</option>
                        <option value="1st">1st</option>
                        <option value="2nd">2nd</option>
                        <option value="3rd">3rd</option>
                        <option value="4th">4th</option>
                        <option value="5th">5th</option>
                </select>
                <div id="remove_set_7" style="display:none;">&nbsp; <a name="#" class="btn boxed" onclick="removeGrade()" style="cursor:pointer; font-size:10px; font-weight:bold;">remove</a> </div>
                </fieldset>

                <div id="add_error_message" style="display: none;" class="form_error_div">Please complete the existing fields before adding more.</div>
                <div id="ten_error_message" style="display: none;" class="form_error_div">Number of Students Must be 10 per group</div>
                <div style="padding-bottom:30px;">
                    <div id="bt_addGradeSet"> <a name="#" class="btn boxed" onclick="addMore()" style="cursor:pointer; font-size:14px;font-weight:bold; text-decoration:none;">Add Another Grade</a>

                    </div>
                </div>
            </div>
            <!-- end k5 -->
            <!-- start 612 -->

                <div class="bl_200px select_grade_set_1_error"> <u>*</u>Grades 6-12
                    <br></br> <em>Schools are limited to 150 students in grades 6-12 per school, per day</em>

                </div>
                <div id="select_grade_limit_6_12">
                    <fieldset style="padding-bottom:8px;display:block;" id="grade_level_set_1">
                        <label>Number of Students:</label>
                        <div class="customInput"><input type="text" class="textfield2 required" id="number_students_set_1" maxlength="4" name="6_12_number_students_set_1" /></div>
                        <select name="6_12_select_grade_set_1" id="select_grade_set_1" class="required sel-1" style="width:116px;">
                            <option value="">&lt; Grade &gt;</option>
                            <option value="6th">6th</option>
                            <option value="7th">7th</option>
                            <option value="8th">8th</option>
                            <option value="9th">9th</option>
                            <option value="10th">10th</option>
                            <option value="11th">11th</option>
                            <option value="12th">12th</option>
                        </select>


                    </fieldset>
                    <fieldset style="padding-bottom:8px;display:none;" id="grade_level_set_2">
                        <label>Number of Students:</label>

                    <div class="customInput"><input type="text" class="textfield2" id="number_students_set_2" name="6_12_number_students_set_2" maxlength="4" /></div>
                        <select name="6_12_select_grade_set_2" id="select_grade_set_2" class="sel-1" style="width:116px;">
                            <option value="">&lt; Grade &gt;</option>
                            <option value="6th">6th</option>
                            <option value="7th">7th</option>
                            <option value="8th">8th</option>
                            <option value="9th">9th</option>
                            <option value="10th">10th</option>
                            <option value="11th">11th</option>
                            <option value="12th">12th</option>
                        </select>

                        <div id="remove_set_2" style="display:none; clear:none;">&nbsp; <a name="#" class="btn boxed" onclick="removeGrade_two()" style="cursor:pointer; font-size:10px; font-weight:bold;">remove</a> </div>
                    </fieldset>
                    <fieldset style="padding-bottom:8px;display:none;" id="grade_level_set_3">
                        <label>Number of Students:</label>
                        <div class="customInput"><input type="text" class="textfield2" id="number_students_set_3" name="6_12_number_students_set_3" maxlength="4" /></div>
                        <select name="6_12_select_grade_set_3" id="select_grade_set_3" class="sel-1" style="width:116px;">
                            <option value="">&lt; Grade &gt;</option>
                            <option value="6th">6th</option>
                            <option value="7th">7th</option>
                            <option value="8th">8th</option>
                            <option value="9th">9th</option>
                            <option value="10th">10th</option>
                            <option value="11th">11th</option>
                            <option value="12th">12th</option>
                        </select>


                        <div id="remove_set_3" style="display:none;">&nbsp; <a name="#" class="btn boxed" onclick="removeGrade_two()" style="cursor:pointer; font-size:10px; font-weight:bold;">remove</a> </div>
                    </fieldset>
                    <fieldset style="padding-bottom:8px;display:none;" id="grade_level_set_4">
                        <label>Number of Students:</label>
                        <div class="customInput"><input type="text" class="textfield2" id="number_students_set_4" name="6_12_number_students_set_4" maxlength="4" /></div>
                        <select name="6_12_select_grade_set_4" id="select_grade_set_4" class="sel-1" style="width:116px;">
                            <option value="">&lt; Grade &gt;</option>
                            <option value="6th">6th</option>
                            <option value="7th">7th</option>
                            <option value="8th">8th</option>
                            <option value="9th">9th</option>
                            <option value="10th">10th</option>
                            <option value="11th">11th</option>
                            <option value="12th">12th</option>
                        </select>


                        <div id="remove_set_4" style="display:none; clear:none;">&nbsp; <a name="#" class="btn boxed" onclick="removeGrade_two()" style="cursor:pointer; font-size:10px; font-weight:bold;">remove</a> </div>
                    </fieldset>
                    <fieldset style="padding-bottom:8px;display:none;" id="grade_level_set_5">
                        <label>Number of Students:</label>
                        <div class="customInput"><input type="text" class="textfield2" id="number_students_set_5" name="6_12_number_students_set_5" maxlength="4" /></div>
                        <select name="6_12_select_grade_set_5" id="select_grade_set_5" class="sel-1" style="width:116px;">
                            <option value="">&lt; Grade &gt;</option>
                            <option value="6th">6th</option>
                            <option value="7th">7th</option>
                            <option value="8th">8th</option>
                            <option value="9th">9th</option>
                            <option value="10th">10th</option>
                            <option value="11th">11th</option>
                            <option value="12th">12th</option>
                        </select>


                        <div id="remove_set_5" style="display:none;">&nbsp; <a name="#" class="btn boxed" onclick="removeGrade_two()" style="cursor:pointer; font-size:10px; font-weight:bold;">remove</a> </div>
                    </fieldset>
                    <fieldset style="padding-bottom:8px;display:none;" id="grade_level_set_6">
                        <label>Number of Students:</label>
                        <div class="customInput"><input type="text" class="textfield2" id="number_students_set_6" name="6_12_number_students_set_6" maxlength="4" /></div>

                        <select name="6_12_select_grade_set_6" id="select_grade_set_6" class="sel-1" style="width:116px;">
                            <option value="">&lt; Grade &gt;</option>
                            <option value="6th">6th</option>
                            <option value="7th">7th</option>
                            <option value="8th">8th</option>
                            <option value="9th">9th</option>
                            <option value="10th">10th</option>
                            <option value="11th">11th</option>
                            <option value="12th">12th</option>
                        </select>

                    <div id="remove_set_6" style="display:none;">&nbsp; <a name="#" class="btn boxed" onclick="removeGrade_two()" style="cursor:pointer; font-size:10px; font-weight:bold;">remove</a> </div>
                    </fieldset>
                    <fieldset style="padding-bottom:8px;display:none;" id="grade_level_set_7">
                        <label>Number of Students:</label>
                        <div class="customInput"><input type="text" class="textfield2" id="number_students_set_7" name="6_12_number_students_set_7" maxlength="4" /></div>
                        <select name="6_12_select_grade_set_7" id="select_grade_set_7" class="sel-1" style="width:116px;">
                            <option value="">&lt; Grade &gt;</option>
                            <option value="6th">6th</option>
                            <option value="7th">7th</option>
                            <option value="8th">8th</option>
                            <option value="9th">9th</option>
                            <option value="10th">10th</option>
                            <option value="11th">11th</option>
                            <option value="12th">12th</option>
                        </select>


                <div id="remove_set_7" style="display:none;">&nbsp; <a name="#" class="btn boxed" onclick="removeGrade_two()" style="cursor:pointer; font-size:10px; font-weight:bold;">remove</a> </div>
                    </fieldset>

                </div>
                <div id="add_error_message_2" style="display: none;" class="form_error_div">Please complete the existing fields before adding more.</div>
                <div id="ten_error_message" style="display: none;" class="form_error_div">Number of Students Must be 10 per group</div>
                <div id="150_error_message" style="display: none;" class="form_error_div">Total Number of Students Must not exceed 150 per group per day</div>
                <div style="padding-bottom:30px;">
                    <div id="bt_addGradeSet"> <a name="#" class="btn boxed" onclick="addMore_two()" style="cursor:pointer; font-size:14px;font-weight:bold; text-decoration:none;">Add Another Grade</a>

                    </div>
                </div>
            </div>
            <!-- end 612 -->
            <fieldset class="number_adults_error" style="width: 386px;">
                <label for="number_adults"><u>*</u> Number of Adults:</label>
                <div class="customInput"><input type="text" class="textfield2 required" id="number_adults" name="number_adults" maxlength="4" /></div>
            </fieldset>
                <em>We require 1 adult for every 10 students. We ask that you bring a maximum of 1 adult for every 5 students for the best field trip experience</em>
             <div class="bl_button"> <a class="time_continue btn boxed" name="#" onclick="checkgrade()">Continue</a></div>
    </div>

    <!-- Grades Question Start-->



    <!-- Guided Programs Start-->
    <div id="page10" style="display:none;">

        <h2>Guided Program Reservations</h2>
        <p class="">

        <div id="infoguided"><br>
        <em>All visits to the Page are self-guided. During the fall season, we offer grade-specific Guided Programs, facilitated by a Museum educator. </em>
        <em>Reservations for Guided Programs are subject to availability and grade restrictions. If you do not see a program listed, it is unavailable based on the information listed in the request results. </em>
        <br></br>
        <p class="guideinfo"><strong>List requests in order of preference, or check the box below if you do not want to add a Guided Program to your visit.</strong></p>
        </div>


        <div id="correctdates" style="display:none;">
        <p>We apologize, but your total number of students exceeds the capacity we can accommodate per day in guided programming for at least one of your grades. If you would
        like to request a Guided Program, please consider booking your group on two or more separate days using the following capacity guidelines:</p>
        <div id="prog">
        <em>Windows into Nature - Maximum 90 PreK - 1st graders per day</em><br>
        <em>Fossil Detectives - Maximum 90 2nd - 5th graders per day</em><br>
        <em>Guided Tours - Maximum 150 6th - 12th graders per day</em><br>
        <em>Small Survivors: Ice Age Invertebrates - Maximum 60 6th-12th graders per day</em><br>
        </div>
        </div>
        <br></br>

        <div id="gp_set_1" class="gp_show" style="display:none;">
        <h5 class="gp_header">PreK – Grade 1</h5>
        <fieldset>
        <select id="gp_choice_1" name="pk_1_gp_choice_1" style="width:400px;" class="sel-3">
            <option value="" selected="selected">Choose</option>
            <option class="select" value="Windows into Nature">Windows into Nature</option>
        </select>
        </fieldset>
        </div>
        <div id="gp_set_1_no"></div>

        <div id="gp_set_2" class="gp_show" style="display:none;">
        <h5 class="gp_header">Grade 2 – Grade 5</h5>
        <fieldset>
        <select id="gp_choice_1" name="2_5_gp_choice_1" style="width:400px;" class="sel-3">
            <option value="" selected="selected">Choose</option>
            <option class="select" value="Fossil Detectives">Fossil Detectives</option>
        </select>
        </fieldset>
        </div>
        <div id="gp_set_2_no"></div>


        <div id="gp_set_3" class="gp_show" style="display:none;">
        <h5 class="gp_header">Grade 6 – Grade 12</h5>
        <fieldset class="gps1">
        </fieldset>
        <fieldset class="gps2">
        </fieldset>
        </div>
        <div id="gp_set_2_no"></div>

        <br>
        </br>
        <div id="gp_set_4">
        <fieldset>
        <label>I do not want to add a Guided Program to this visit</label>
        <input type="checkbox" name="checkbox_is_gp" id="checkbox_is_gp" value=""/>
        </fieldset>
        </div>
        <div id="gp_set_5" style="display:none;">

        </div>
        <div class="bl_button">
        <a class="guided_continue btn boxed" name="#" onclick="checkGuided()">Continue</a>
        </div>
    </div>
    <!-- Guided Programs End-->





        <!-- General Information Form 1 Start-->
        <div id="page11" style="display:none;">
            <h2>Contact Information</h2>
            <em>This is the person we will correspond with regarding setting up your visit to the Page. </em>

                <fieldset class="bl_200px">
                    <label><u>*</u><span style="font-size: 11px;">= required field</span></label>
                    &nbsp;
                </fieldset>

                <fieldset class="first_name_error">
                   <label><u>*</u> First Name:</label>
                    <div class="customInput"><input type="text" class="textfield required" id="first_name" name="first_name" maxlength="50"></div>
                </fieldset>

                <fieldset class="last_name_error">
                    <label><u>*</u> Last Name:</label>
                    <div class="customInput"><input type="text" class="textfield required" id="last_name" name="last_name" maxlength="50"></div>
                </fieldset>

                <fieldset class="work_phone_error">
                    <label><u>*</u> Work Phone:</label>
                    <div class="customInput"><input type="text" class="textfield required" id="work_phone" name="work_phone" maxlength="20"></div>
                </fieldset>

                <fieldset class="cell_phone_error">
                    <label><u>*</u> Mobile Phone:</label>
                    <div class="customInput"><input type="text" class="textfield required" id="cell_phone" name="cell_phone" maxlength="20"></div>
                </fieldset>

                <fieldset class="email_error">
                    <label><u>*</u> E-mail:</label>
                    <div class="customInput"><input type="text" class="textfield required mail" id="email" name="email" maxlength="75"></div>
                </fieldset>
                <fieldset class="checkbox">
                            <label>Please check the box of you would like to be added to our teacher e-mail list.</label>
                            <div class="checkboxWrap" style="width: 280px!important;"><input type="checkbox" name="emailSubscribe" id="emailSubscribe"><label for="emailSubscribeMsg" id="emailSubscribeMsg"></label></div>
                </fieldset>

                <fieldset class="email2_error">
                    <label><u>*</u> Please Re-type E-mail:</label>
                    <div class="customInput"><input type="text" class="textfield required mail" id="email2" name="email2" maxlength="75"></div>
                </fieldset>
            <div class="bl_button">
                <a class="info_1_continue btn boxed" name="#"  onclick="checkInfo_one()">Continue</a>
            </div>
        </div>
        <!-- General Information Form 1 End-->
        <!-- General Information Form 2 Start-->
        <div id="page12" style="display:none;">
            <h2>School Information</h2>


            <fieldset class="school_name_error">
                <label><u>*</u> School Name:</label>
                <div class="customInput"><input type="text" class="textfield4 required" id="school_name" name="school_name" maxlength="100"/>
            </fieldset>
            <fieldset class="checkbox">
                            <label>Please check if you are a Title One school</label>
                            <div class="checkboxWrap"><input type="checkbox" name="titleOneSchool" id="titleOneSchool"><label for="titleOneSchool" id="titleOneSchoolMsg"></label></div>
            </fieldset>

            <fieldset class="school_address_error">
                <label><u>*</u> School Street Address:</label>
                <div class="customInput"><input type="text" class="textfield required" id="school_address" name="school_address" maxlength="75"/></div>
            </fieldset>

            <fieldset>
                <label>School Street Address 2:</label>
                <div class="customInput"><input type="text" class="textfield" id="school_address2" name="school_address2" maxlength="75"/></div>
            </fieldset>

            <fieldset class="school_city_error">
                <label><u>*</u> School City:</label>
                <div class="customInput"><input type="text" class="textfield required" id="school_city" name="school_city" maxlength="60"/></div>
            </fieldset>

            <fieldset class="school_zip_error">
                <label><u>*</u> School Zip Code:</label>

                <div class="customInput"><input type="text" class="textfield2 required" id="school_zip" name="school_zip" maxlength="14"/></div>
            </fieldset>

            <fieldset class="school_phone_error">
                <label><u>*</u> School Phone:</label>
                <div class="customInput"><input type="text" class="textfield required" id="school_phone" name="school_phone" maxlength="20"/></div>
            </fieldset>

            <fieldset>
               <label> Lead Teacher: (<em>must be teacher who will be accompanying students during the visit</em>)</label>
                <div class="customInput"><input type="text" class="textfield" id="lead_teacher" name="lead_teacher" maxlength="60"/></div>
            </fieldset>

            <fieldset class="teacher_cell_phone_error">
                <label><u>*</u> Lead teacher mobile phone:</label>
                <div class="customInput"><input type="text" class="textfield required" id="teacher_cell_phone" name="teacher_cell_phone" maxlength="20"/></div>
            </fieldset>
        <div class="bl_button"><a class="info_2_continue btn boxed" name="#" onclick="checkInfo_two()">Continue</a></div>
        </div>
        <!-- General Information Form 2 End-->
        <!-- General Information Form 3 Start-->
        <div id="page13" style="display:none;">
        <h2>Additional Visit Information</h2>
                <fieldset class="special_students_error">

                    <label>Do you have students with special needs that need additional accommodations?</label>
                    <textarea id="special_students" name="special_students" style="width: 308px; height: 100px; padding: 8px 0 0 8px;"/></textarea>

                </fieldset>

                <fieldset class="comment_error">
                    <label>Other Comments/Requests:</label>
                    <textarea  id="comment" name="comments_requests" style="width: 308px; height: 100px; padding: 8px 0 0 8px;"/></textarea>

                </fieldset>
        <div class="bl_button"><a class="info_3_continue btn boxed" name="#"  onclick="checkInfo_three()">Continue</a></div>
        <!-- General Information Form 3 End-->
     </div>

    


    <!-- - - step 3, thank you message - -->

        <div id="thanks" style="display:none">

            <p><strong>Check Your E</strong><strong>-</strong><strong>Mail!</strong>
            </p>

            <p>You will receive at least two e-mails from the Museum:
                <br></br>
            </p>
            <p> <strong>E</strong><strong>-</strong><strong>mail 1: </strong>Tells you we received your request. It contains your visit details will arrive within 24 hours after you read this. Keep this e-mail handy, you may need it to look up your information going forward.<u>E-mail 1 is not a confirmation.</u>
                <br></br>
            </p>
            <p> <strong>E</strong><strong>-</strong><strong>mail 2: </strong>Confirms your visit. It includes an order number, lists reservations for guided programs, and arrives within 2 weeks of submitting this form. Check the date of your visit (it may not be your first choice), and times for reservations.
                <br></br>If you have not received the e-mails above, check spam or junk folders. If you still can’t find the e-mail above, or if you need to cancel a visit or request, contact us at schoolprograms@tarpits.org or call 323.857.6300 x 111.</p>
            <p>
                <br></br>
                <div style="text-align:center"> <em>We look forward to your visit!</em>
                </div>
            </p>
            <p>
                <br></br>
            </p>
        </div>
 
    <!-- - - step 3, thank you message - -->

    <!-- Review Statement -->

    <div id="review" style="display:none">
        <p>
            <strong>Please Review the Info Below to make sure it is correct.</strong>
        </p>
    </div>
    <!-- Review Statement -->

    <!-- Results Start-->
    <div id="results_block" style="display:none;">

        <h3 class="results_one">Request Results</h3>
        <h3 class="results_two" style="display:none;">Request Receipt</h3>

          <div id="results"></div>


         <div id="results1"></div>


         <div id="results2"></div>


         <div id="results3"></div>


         <div id="results4"></div>


         <div id="results5"></div>


         <div id="results6"></div>


         <div id="results7"></div>


         <div id="results8"></div>


         <div id="results9"></div>


        <div id="results10"></div>


        <div id="results11"></div>


        <div id="results12"></div>


        <div id="results13"></div>


        <div id="results14"></div>


        <div id="results15"></div>


        <div id="results16"></div>


        <div id="results17"></div>


        <div id="results18"></div>


        <div id="results19"></div>


        <div id="results20"></div>


        <div id="results21"></div>


        <div id="results22"></div>


        <div id="results23"></div>


        <div id="results24"></div>


        <div id="results25"></div>


        <div id="results26"></div>


        <div id="results27"></div>


        <div id="results28"></div>


        <div id="results29"></div>


        <div id="results30"></div>


        <div id="results31"></div>


        <div id="results32"></div>


        <div id="results33"></div>


        <div id="results34"></div>


        <div id="results35"></div>


        <div id="results36"></div>


        <div id="results37"></div>


        <div id="results38"></div>


        <div id="results39"></div>


        <div id="results40"></div>


        <div id="results41"></div>


        <div id="results42"></div>


        <div id="results43"></div>


        <div id="results44"></div>


        <div id="results45"></div>


        <div id="results46"></div>


        <div id="results47"></div>


        <div id="results48"></div>


        <div id="results49"></div>


        <div id="results50"></div>


        <div id="submit_button_block" style="display:none">
            <div class="bl_button">
                <a name="#" class="btn boxed" onclick="submitMe()" style="width: 160px;">Finish Registration</a>
            </div>
        </div>
    </div>
    <!-- Results End-->


<!-- Error Messages Start-->
<div id="inline-error-message-3" style="display:none; font-size:12px; font-weight:bold;">
    <p> <strong>Your group does not qualify for a school visit.</strong>

    </p>
    <p> <a href="/site/plan-your-visit/group-visits/reservations">Click here</a> to book a visit through Group Sales page</p>
    <p> <a href="/site/for-teachers/homeschool-days">Click here</a> to learn more about our Homeschool Days</p>
</div>
<div id="inline-error-message-1" style="display:none; font-size:12px; font-weight:bold;">
    <p>Contact your district representative listed below to arrange a visit to the Page</p>
    <table border="0" cellspacing="0" cellpadding="0" width="664">
        <tr>
            <td width="308" valign="top">
                <p> <strong>Los Angeles Unified School District </strong>
                    <br>(213) 580-2950</p>
            </td>
            <td width="356" valign="top">
                <p> <strong>Covina Valley Unified School District </strong>
                    <br>(626) 974-7600 x2078</p>
            </td>
        </tr>
        <tr>
            <td width="308" valign="top">
                <p> <strong>Montebello Unified School District</strong>
                    <br>(323) 887-7900 x2356</p>
            </td>
            <td width="356" valign="top">
                <p> <strong>Paramount Unified School District</strong>
                    <br>(562) 602-6035</p>
            </td>
        </tr>
        <tr>
            <td width="308" valign="top">
                <p> <strong>ABC Unified School District</strong>
                    <br>(562) 809-1079</p>
            </td>
            <td width="356" valign="top">
                <p> <strong>El Monte City School District </strong>
                    <br>(626) 453-3729</p>
            </td>
        </tr>
        <tr>
            <td width="308" valign="top">
                <p> <strong>Alhambra Unified School District </strong>
                    <br>(626) 943-3510</p>
            </td>
            <td width="356" valign="top">
                <p> <strong>Garvey School District</strong>
                    <br>(626) 307-3404</p>
            </td>
        </tr>
        <tr>
            <td width="308" valign="top">
                <p> <strong>Long Beach Unified School District </strong>
                    <br>(562) 997-8325</p>
            </td>
            <td width="356" valign="top">
                <p> <strong>Santa Ana Unified School District </strong>
                    <br>(714) 558-5805</p>
            </td>
        </tr>
        <tr>
            <td width="308" valign="top">
                <p> <strong>Sulpher Springs School District </strong>
                    <br>(661) 252-3822</p>
            </td>
            <td width="356" valign="top"></td>
        </tr>
    </table>
</div>
<div id="inline-error-message-2" style="display:none; font-size:12px; font-weight:bold;"></div>
<!-- Error Messages End-->

    <!-- - - step 2, review confirmation - -->
    <div id="submit_button_block" style="display:none">
    <div class="bl_button">
        <a name="#" class="btn boxed" onclick="submitMe()" style="width: 160px;">Finish Registration</a>
    </div>
    </div>
    <!-- - - step 2, review confirmation - -->

</div><!-- end formblock -->

<div id="processing-block" style="display:none;">
     <h2><img id="processing-image" src="<?php echo $Page_img_path; ?>/progress-roller.gif" alt="Processing..." align="middle" /> Please wait while we process your request.</h2>
</div>
</form>
<div id="processing-dialog" title="Processing..." style="display:none;">
<p id="processing-dialog-message">
<img class="processing_image" src="" alt="Processing..." align="middle"/>Please wait while we process your request.
</p>
</div>
<div id="error-dialog" title="Error" style="display:none;">
<p id="error-dialog-message">
</p>
</div>
<div id="notice-dialog" title="Important Notice" style="display:none;">
<p id="notice-dialog-message" style="padding-bottom: 18px;">
<strong style="font-size: 11px;">If your first choice date is unavailable, your visit will not be booked”</strong>
</p>
</div>



</div><!-- end columnWrap -->

<script src ="form.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

</body>
</html>
