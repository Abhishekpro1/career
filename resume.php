<?php 
if(isset($_POST["post_resume"]))
{
	$candidate_first_name = $_POST['candidate_first_name'];
	$candidate_last_name = $_POST['candidate_last_name'];
	$candidate_birthdate = $_POST['candidate_birthdate'];
	$candidate_address = $_POST['candidate_address'];
	$candidate_phone_number = $_POST['candidate_phone_number'];
	$candidate_email = $_POST['candidate_email'];
	$candidate_position = $_POST['candidate_position'];
	$candidate_language = $_POST['candidate_language'];
	$candidate_experience = $_POST['candidate_experience'];
	$candidate_degree = $_POST['candidate_degree'];
	$candidate_job_type = $_POST['candidate_job_type'];
	$candidate_job_location = $_POST['candidate_job_location'];
	$candidate_desc = $_POST['candidate_desc'];
	$candidate_school = $_POST['candidate_school'];
	$candidate_study_field = $_POST['candidate_study_field'];
	$candidate_degree_from = $_POST['candidate_degree_from'];
	$candidate_degree_to = $_POST['candidate_degree_to'];
	$candidate_edu_degree = $_POST['candidate_edu_degree'];
	$candidate_activites = $_POST['candidate_activites'];
	$candidate_edu_desc = $_POST['candidate_edu_desc'];
	$candidate_prev_company = $_POST['candidate_prev_company'];
	$candidate_prev_job_title = $_POST['candidate_prev_job_title'];
	$candidate_prev_company_location = $_POST['candidate_prev_company_location'];
	$candidate_prev_company_from = $_POST['candidate_prev_company_from'];
	$candidate_prev_company_to = $_POST['candidate_prev_company_to'];
	$candidate_exp_desc = $_POST['candidate_exp_desc'];
	$candidate_skill = $_POST['candidate_skill'];
	$candidate_skill_x = $_POST['candidate_skill_x'];

	$query = mysqli_query($con,"INSERT INTO resume_form(candidate_first_name, candidate_last_name, candidate_birthdate, candidate_address, candidate_phone_number, candidate_email, candidate_position, candidate_language, candidate_experience, candidate_degree, candidate_job_type, candidate_job_location, candidate_desc, candidate_school, candidate_study_field, candidate_degree_from, candidate_degree_to, candidate_edu_degree, candidate_activites, candidate_edu_desc, candidate_prev_company, candidate_prev_job_title, candidate_prev_company_location, candidate_prev_company_from, candidate_prev_company_to, candidate_exp_desc, candidate_skill, candidate_skill_x)
	 values
	 ('$candidate_first_name','$candidate_last_name','$candidate_birthdate','$candidate_address','$candidate_phone_number','$candidate_email','$candidate_position','$candidate_language','$candidate_experience','$candidate_degree','$candidate_job_type','$candidate_job_location','$candidate_desc','$candidate_school','$candidate_study_field','$candidate_degree_from','$candidate_degree_to','$candidate_edu_degree','$candidate_activites','$candidate_edu_desc','$candidate_prev_company', '$candidate_prev_job_title','$candidate_prev_company_location','$candidate_prev_company_from', '$candidate_prev_company_to','$candidate_exp_desc','$candidate_skill', '$candidate_skill_x',)");
    if ($query) {
		echo "submit";
	}
}
?>