Part Pixel Education App
------
This app regulates communication and rating from teachers and parents to students.

DB Table Strucure
------
*Some of these are default Wordpress table columns and some are modified*

<h4>pp_users</h4>
One row per user.
<table>
	<tr>
		<th>ID</th>
		<th>user_login</th>
		<th>user_pass</th>
		<th>user_nicename</th>
		<th>user_email</th>
		<th>user_url</th>
		<th>user_registered</th>
		<th>user activation_key</th>
		<th>user_status</th>
		<th>display_name</th>
	</tr>
</table>

<h4>pp_usermeta</h4>
There are 24 usermeta rows by default. Only relevant rows are included here. Most important here is user_type. Any date about the user can be kept here relating to the user.
<table>
	<tr>
		<th>umeta_id</th>
		<th>user_id</th>
		<th>meta_key</th>
		<th>meta_value</th>
	</tr>
	<tr>
		<td>1</td>
		<td>user ID</td>
		<td>nickname</td>
		<td>examplenickname</td>
	</tr>
	<tr>
		<td>2</td>
		<td>user ID</td>
		<td>first_name</td>
		<td>examplefirstname</td>
	</tr>
	<tr>
		<td>3</td>
		<td>user ID</td>
		<td>last_name</td>
		<td>examplelastname</td>
	</tr>
	<tr>
		<td>10</td>
		<td>user ID</td>
		<td>wp_capabilities</td>
		<td>serialized list of capabilities</td>
	</tr>
	<tr>
		<td>25</td>
		<td>user ID</td>
		<td>user_type</td>
		<td>0 = schooladmin<br>
				1 = teacher<br>
				2 = parent<br>
				3 = student<br>
				4 = othertype...
		</td>
	</tr>
	<tr>
		<td>26</td>
		<td>user ID</td>
		<td>grade_level</td>
		<td>0 = kindergarden<br>
				12 = senior...
	</tr>
	<tr>
		<td>28</td>
		<td>user ID</td>
		<td>p1_subject</td>
		<td>eg: english</td>				
	</tr>
	<tr>
		<td>29</td>
		<td>user ID</td>
		<td>p2_subject</td>
		<td>eg: english</td>				
	</tr>
	<tr>
		<td>30</td>
		<td>user ID</td>
		<td>p3_subject</td>
		<td>eg: english</td>				
	</tr>
	<tr>
		<td>31</td>
		<td>user ID</td>
		<td>p1_subject</td>
		<td>eg: english</td>				
	</tr>
	<tr>
		<td>32</td>
		<td>user ID</td>
		<td>p4_subject</td>
		<td>eg: english</td>				
	</tr>
	<tr>
		<td>33</td>
		<td>user ID</td>
		<td>p5_subject</td>
		<td>eg: english</td>				
	</tr>
	<tr>
		<td>34</td>
		<td>user ID</td>
		<td>p6_subject</td>
		<td>eg: english</td>				
	</tr>
	<tr>
		<td>35</td>
		<td>user ID</td>
		<td>p7_subject</td>
		<td>eg: english</td>				
	</tr>

</table>

<h4>pp_user_relationships</h4>
Custom table. Creates relationships between students, teachers and parents.

<table>
	<tr>
		<th>student_id</th>
		<th>mom_id</th>
		<th>dad_id</th>
		<th>guardian_id</th>
		<th>p1_teacher_id</th>
		<th>p2_teacher_id</th>
		<th>p3_teacher_id</th>
		<th>p4_teacher_id</th>
		<th>p5_teacher_id</th>
		<th>p6_teacher_id</th>
		<th>p7_teacher_id</th>
	</tr>
</table>

<h4>pp_user_data</h4>
Can use ```entry_author_id``` to find out what ```user_type``` is entering the data and what ```user_id``` the entry is directed to using ```entry_subject_id```
<table>
	<tr>
		<th>entry_id</th>
		<th>entry_author_id</th>
		<th>entry_subject_id</th>
		<th>entry_date</th>
		<th>entry_title</th>
		<th>entry_name</th>
		<th>entry_modified_date</th>
		<th>post_type</th>
		<th>student_behavior_rating</th>
		<th>student_performance_rating</th>
		<th>student_behavior_comments</th>
		<th>student_performance_comments</th>
		<th>who_can_view</th>
	</tr>
</table>

<h2>Future Ideas</h2>
<ul>
	<li>Instant messaging</li>
	<li>Student useful resources page like citation help, specific khan academy lessons based on subject.</li>
	<li>Graphs of student performance and behavior ratings using http://d3js.org/</li>
	<li></li>
	<li></li>
</ul>
