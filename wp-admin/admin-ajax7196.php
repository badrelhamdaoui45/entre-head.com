
.frm_hidden,
.frm_add_form_row.frm_hidden,
.frm_remove_form_row.frm_hidden,
.with_frm_style .frm_button.frm_hidden{
	display:none;
}

form input.frm_verify{
	display:none !important;
}

.with_frm_style fieldset{
	min-width:0;
}

.with_frm_style fieldset fieldset{
	border:none;
	margin:0;
	padding:0;
	background-color:transparent;
}

legend.frm_hidden{
	display:none !important;
}

.with_frm_style .frm_form_fields{
	opacity:1;
	transition: opacity 0.1s linear;
}
.with_frm_style .frm_doing_ajax{
	opacity:.5;
}

.frm_transparent{
	color:transparent;
}

.input[type=file].frm_transparent:focus, .with_frm_style input[type=file]{
	background-color:transparent;
	border:none;
	outline:none;
	box-shadow:none;
}

.with_frm_style input[type=file]{
	display:initial;
}

.frm_preview_page:before{
	content:normal !important;
}

.frm_preview_page{
	padding:25px;
}

.with_frm_style .frm_primary_label{
	max-width:100%;
}

.with_frm_style .frm_top_container .frm_primary_label,
.with_frm_style .frm_hidden_container .frm_primary_label,
.with_frm_style .frm_pos_top{
	display:block;
	float:none;
	width:auto;
}

.with_frm_style .frm_inline_container .frm_primary_label{
	margin-right:10px;
}

.with_frm_style .frm_right_container .frm_primary_label,
.with_frm_style .frm_pos_right{
	display:inline;
	float:right;
	margin-left:10px;
}

.with_frm_style .frm_pos_center {
	text-align: center;
}

.with_frm_style .frm_none_container .frm_primary_label,
.with_frm_style .frm_pos_none,
.frm_pos_none,
.frm_none_container .frm_primary_label{
	display:none;
}

.with_frm_style .frm_section_heading.frm_hide_section{
	margin-top:0 !important;
}

.with_frm_style .frm_hidden_container .frm_primary_label,
.with_frm_style .frm_pos_hidden,
.frm_hidden_container .frm_primary_label{
	visibility:hidden;
	white-space:nowrap;
}

.with_frm_style .frm_inside_container .frm_primary_label{
	opacity:0;
	transition: opacity 0.1s linear;
}

.with_frm_style .frm_inside_container label.frm_visible,
.frm_visible{
	opacity:1;
}

.with_frm_style .frm_description{
	clear:both;
}

.with_frm_style input[type=number][readonly]{
	-moz-appearance: textfield;
}

.with_frm_style select[multiple="multiple"]{
	height:auto;
	line-height:normal;
}

.with_frm_style .frm_catlevel_2,
.with_frm_style .frm_catlevel_3,
.with_frm_style .frm_catlevel_4,
.with_frm_style .frm_catlevel_5{
	margin-left:18px;
}

.with_frm_style .wp-editor-container{
	border:1px solid #e5e5e5;
}

.with_frm_style .quicktags-toolbar input{
	font-size:12px !important;
}

.with_frm_style .wp-editor-container textarea{
	border:none;
}

.with_frm_style textarea{
	height:auto;
}

.with_frm_style .auto_width #loginform input,
.with_frm_style .auto_width input,
.with_frm_style input.auto_width,
.with_frm_style select.auto_width,
.with_frm_style textarea.auto_width{
	width:auto;
}

.with_frm_style .frm_repeat_buttons{
	white-space:nowrap;
}

.with_frm_style .frm_button{
	text-decoration:none;
	border:1px solid #eee;
	padding:5px;
	display:inline;
}

.with_frm_style .frm_submit{
	clear:both;
}

.frm_inline_form .frm_form_field,
.frm_inline_form .frm_submit{
	grid-column: span 1 / span 1;
}

.frm_inline_form .frm_submit{
	margin:0;
}

.frm_submit.frm_inline_submit input[type=submit],
.frm_submit.frm_inline_submit button,
.frm_inline_form .frm_submit input[type=submit],
.frm_inline_form .frm_submit button{
	margin-top:0;
}

.with_frm_style.frm_center_submit .frm_submit{
	text-align:center;
}

.with_frm_style.frm_center_submit .frm_submit input[type=submit],
.with_frm_style.frm_center_submit .frm_submit input[type=button],
.with_frm_style.frm_center_submit .frm_submit button{
	margin-bottom:8px !important;
}

.with_frm_style .frm-edit-page-btn,
.with_frm_style .frm_submit input[type=submit],
.with_frm_style .frm_submit input[type=button],
.with_frm_style .frm_submit button{
	-webkit-appearance: none;
	cursor: pointer;
}

.with_frm_style.frm_center_submit .frm_submit .frm_ajax_loading{
	display: block;
	margin: 0 auto;
}

.with_frm_style .frm_loading_prev .frm_ajax_loading,
.with_frm_style .frm_loading_form .frm_ajax_loading{
	/* keep this for reverse compatibility for old HTML */
	visibility:visible !important;
}

.with_frm_style .frm_loading_prev .frm_prev_page,
.with_frm_style .frm_loading_form .frm_button_submit {
	position: relative;
	opacity: .8;
	color: transparent !important;
	text-shadow: none !important;
}

.with_frm_style .frm_loading_prev .frm_prev_page:hover,
.with_frm_style .frm_loading_prev .frm_prev_page:active,
.with_frm_style .frm_loading_prev .frm_prev_page:focus,
.with_frm_style .frm_loading_form .frm_button_submit:hover,
.with_frm_style .frm_loading_form .frm_button_submit:active,
.with_frm_style .frm_loading_form .frm_button_submit:focus {
	cursor: not-allowed;
	color: transparent;
	outline: none !important;
	box-shadow: none;
}

.with_frm_style .frm_loading_prev .frm_prev_page::before,
.with_frm_style .frm_loading_form .frm_button_submit:before {
	content: '';
	display: inline-block;
	position: absolute;
	background: transparent;
	border: 1px solid #fff;
	border-top-color: transparent;
	border-left-color: transparent;
	border-radius: 50%;
	box-sizing: border-box;
		top: 50%;
	left: 50%;
	margin-top: -10px;
	margin-left: -10px;
	width: 20px;
	height: 20px;
	-webkit-animation: spin 2s linear infinite;
	-moz-animation:    spin 2s linear infinite;
	-o-animation:      spin 2s linear infinite;
	animation:         spin 2s linear infinite;
}


.frm_forms.frm_style_formidable-style.with_frm_style{
	max-width:100%;
	direction:ltr;
		}

.frm_style_formidable-style.with_frm_style,
.frm_style_formidable-style.with_frm_style form,
.frm_style_formidable-style.with_frm_style .frm-show-form div.frm_description p {
	text-align:left;
}


.frm_style_formidable-style.with_frm_style .frm_form_fields  > fieldset{
	border-width:0px;
	border-style:solid;
	border-color:#000000;
	margin:0;
	padding:0 0 15px 0;
	background-color:transparent;
	font-family:"Fira Sans", Sans-serif;
}

.frm_style_formidable-style.with_frm_style legend + h3,
.frm_style_formidable-style.with_frm_style h3.frm_form_title{
	font-size:20px;
	color:#444444;
	font-family:"Fira Sans", Sans-serif;
	margin-top:10px;
	margin-bottom:10px;
}

.frm_style_formidable-style.with_frm_style .frm_primary_label{
	font-family:"Fira Sans", Sans-serif;
	font-size:16px;
	color:#0f122e;
	font-weight:normal;
	text-align:left;
	margin:0;
	padding:0 0 10px 0;
	width:auto;
	display:block;
}

.frm_style_formidable-style.with_frm_style .frm_form_field.frm_html_container,
.frm_style_formidable-style.with_frm_style .frm_form_field .frm_show_it{
	font-family:"Fira Sans", Sans-serif;
	color:#666666;
}

.frm_style_formidable-style.with_frm_style .frm_form_field.frm_html_container{
	font-size:14px;
}

.frm_style_formidable-style.with_frm_style .frm_form_field .frm_show_it{
	font-size:14px;
	font-weight:normal;
}

.frm_style_formidable-style.with_frm_style .frm_icon_font{
	color:#0f122e;
}

.frm_style_formidable-style.with_frm_style .frm_icon_font.frm_minus_icon:before{
	content:"\e600";
}

.frm_style_formidable-style.with_frm_style .frm_icon_font.frm_plus_icon:before{
	content:"\e602";
}

.frm_style_formidable-style.with_frm_style .frm_icon_font.frm_minus_icon:before,
.frm_style_formidable-style.with_frm_style .frm_icon_font.frm_plus_icon:before{
	color:#ffffff;
	vertical-align:middle;
}

.frm_style_formidable-style.with_frm_style .frm_trigger.active .frm_icon_font.frm_arrow_icon:before{
	content:"\e62d";
	color:#444444;
}

.frm_style_formidable-style.with_frm_style .frm_trigger .frm_icon_font.frm_arrow_icon:before{
	content:"\e62a";
	color:#444444;
}

.frm_style_formidable-style.with_frm_style .form-field{
	margin-bottom:20px;
}
.frm_style_formidable-style.with_frm_style .frm_grid,
.frm_style_formidable-style.with_frm_style .frm_grid_first,
.frm_style_formidable-style.with_frm_style .frm_grid_odd {
	margin-bottom:0;
}
.frm_style_formidable-style.with_frm_style .form-field.frm_section_heading{
	margin-bottom:0;
}

.frm_style_formidable-style.with_frm_style p.description,
.frm_style_formidable-style.with_frm_style div.description,
.frm_style_formidable-style.with_frm_style div.frm_description,
.frm_style_formidable-style.with_frm_style .frm-show-form > div.frm_description,
.frm_style_formidable-style.with_frm_style .frm_error{
	margin:0;
	padding:0;
	font-family:"Fira Sans", Sans-serif;
	font-size:12px;
	color:#666666;
	font-weight:normal;
	text-align:left;
	font-style:normal;
	max-width:100%;
}

/* Form description */
.frm_style_formidable-style.with_frm_style .frm-show-form div.frm_description p{
	font-size:14px;
	color:#666666;
	margin-top:10px;
	margin-bottom:25px;

}

/* Left and right labels */

.frm_style_formidable-style.with_frm_style .frm_form_field.frm_left_container{
	grid-template-columns: 150px auto;
}

.frm_style_formidable-style.with_frm_style .frm_form_field.frm_right_container{
	grid-template-columns: auto 150px;
}

.frm_form_field.frm_right_container{
	grid-template-columns: auto 25%;
}

.frm_style_formidable-style.with_frm_style .frm_inline_container.frm_dynamic_select_container .frm_data_container,
.frm_style_formidable-style.with_frm_style .frm_inline_container.frm_dynamic_select_container .frm_opt_container{
	display:inline;
}

.frm_style_formidable-style.with_frm_style .frm_pos_right{
	display:inline;
	width:150px;
}

.frm_style_formidable-style.with_frm_style .frm_none_container .frm_primary_label,
.frm_style_formidable-style.with_frm_style .frm_pos_none{
	display:none;
}

.frm_style_formidable-style.with_frm_style .frm_scale label{
	font-weight:normal;
	font-family:"Fira Sans", Sans-serif;
	font-size:14px;
	color:#0f122e;
}

.frm_style_formidable-style.with_frm_style .frm_required{
	color:#ff006e;
	font-weight:bold;
}

.frm_style_formidable-style.with_frm_style input[type=text],
.frm_style_formidable-style.with_frm_style input[type=password],
.frm_style_formidable-style.with_frm_style input[type=email],
.frm_style_formidable-style.with_frm_style input[type=number],
.frm_style_formidable-style.with_frm_style input[type=url],
.frm_style_formidable-style.with_frm_style input[type=tel],
.frm_style_formidable-style.with_frm_style input[type=search],
.frm_style_formidable-style.with_frm_style select,
.frm_style_formidable-style.with_frm_style textarea,
.frm_style_formidable-style.with_frm_style .frm-card-element.StripeElement,
.frm_style_formidable-style.with_frm_style .chosen-container{
	font-family:"Fira Sans", Sans-serif;
	font-size:14px;
	margin-bottom:0;
}

.frm_style_formidable-style.with_frm_style textarea{
	vertical-align:top;
}

.frm_style_formidable-style.with_frm_style input[type=text],
.frm_style_formidable-style.with_frm_style input[type=password],
.frm_style_formidable-style.with_frm_style input[type=email],
.frm_style_formidable-style.with_frm_style input[type=number],
.frm_style_formidable-style.with_frm_style input[type=url],
.frm_style_formidable-style.with_frm_style input[type=tel],
.frm_style_formidable-style.with_frm_style input[type=phone],
.frm_style_formidable-style.with_frm_style input[type=search],
.frm_style_formidable-style.with_frm_style select,
.frm_style_formidable-style.with_frm_style textarea,
.frm_form_fields_style,
.frm_style_formidable-style.with_frm_style .frm_scroll_box .frm_opt_container,
.frm_form_fields_active_style,
.frm_form_fields_error_style,
.frm_style_formidable-style.with_frm_style .frm-card-element.StripeElement,
.frm_style_formidable-style.with_frm_style .chosen-container-multi .chosen-choices,
.frm_style_formidable-style.with_frm_style .chosen-container-single .chosen-single{
	color:#0f122e;
	background-color:#ffffff;
	border-color: #0f122e;
	border-width:1px;
	border-style:solid;
	-moz-border-radius:100px;
	-webkit-border-radius:100px;
	border-radius:100px;
	width:100%;
	max-width:100%;
	font-size:14px;
	padding:6px 25px;
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	box-sizing:border-box;
	outline:none;
	font-weight:normal;
	box-shadow:none;
}

.frm_style_formidable-style.with_frm_style input[type=radio],
.frm_style_formidable-style.with_frm_style input[type=checkbox]{
	border-color: #0f122e;
	box-shadow:none;
}

.frm_style_formidable-style.with_frm_style input[type=text],
.frm_style_formidable-style.with_frm_style input[type=password],
.frm_style_formidable-style.with_frm_style input[type=email],
.frm_style_formidable-style.with_frm_style input[type=number],
.frm_style_formidable-style.with_frm_style input[type=url],
.frm_style_formidable-style.with_frm_style input[type=tel],
.frm_style_formidable-style.with_frm_style input[type=file],
.frm_style_formidable-style.with_frm_style input[type=search],
.frm_style_formidable-style.with_frm_style select,
.frm_style_formidable-style.with_frm_style .frm-card-element.StripeElement{
	height:45px;
	line-height:1.3;
}

.frm_style_formidable-style.with_frm_style select[multiple="multiple"]{
	height:auto ;
}

.frm_style_formidable-style.with_frm_style input[type=file]{
	color: #0f122e;
	padding:0px;
	font-family:"Fira Sans", Sans-serif;
	font-size:14px;
}

.frm_style_formidable-style.with_frm_style input[type=file].frm_transparent{
	color:transparent;
}

.frm_style_formidable-style.with_frm_style select{
	width:100%;
	max-width:100%;
}

.frm_style_formidable-style.with_frm_style .wp-editor-wrap{
	width:100%;
	max-width:100%;
}

.frm_style_formidable-style.with_frm_style .wp-editor-container textarea{
	border:none;
}

.frm_style_formidable-style.with_frm_style .mceIframeContainer{
	background-color:#ffffff;
}

.frm_style_formidable-style.with_frm_style .auto_width input,
.frm_style_formidable-style.with_frm_style input.auto_width,
.frm_style_formidable-style.with_frm_style select.auto_width,
.frm_style_formidable-style.with_frm_style textarea.auto_width{
	width:auto;
}

.frm_style_formidable-style.with_frm_style input[disabled],
.frm_style_formidable-style.with_frm_style select[disabled],
.frm_style_formidable-style.with_frm_style textarea[disabled],
.frm_style_formidable-style.with_frm_style input[readonly],
.frm_style_formidable-style.with_frm_style select[readonly],
.frm_style_formidable-style.with_frm_style textarea[readonly]{
	background-color:#ffffff;
	color:#a1a1a1;
	border-color:#E5E5E5;
}

/* These do not work if they are combined */
.frm_style_formidable-style.with_frm_style input::placeholder,
.frm_style_formidable-style.with_frm_style textarea::placeholder{
	color: #a1a1a1;
}
.frm_style_formidable-style.with_frm_style input::-webkit-input-placeholder,
.frm_style_formidable-style.with_frm_style textarea::-webkit-input-placeholder{
	color: #a1a1a1;
}
.frm_style_formidable-style.with_frm_style input::-moz-placeholder,
.frm_style_formidable-style.with_frm_style textarea::-moz-placeholder{
	color: #a1a1a1;
}
.frm_style_formidable-style.with_frm_style input:-ms-input-placeholder,
frm_style_formidable-style.with_frm_style textarea:-ms-input-placeholder{
	color: #a1a1a1;
}
.frm_style_formidable-style.with_frm_style input:-moz-placeholder,
.frm_style_formidable-style.with_frm_style textarea:-moz-placeholder{
	color: #a1a1a1;
}

.frm_style_formidable-style.with_frm_style .frm_default,
.frm_style_formidable-style.with_frm_style input.frm_default,
.frm_style_formidable-style.with_frm_style textarea.frm_default,
.frm_style_formidable-style.with_frm_style select.frm_default,
.frm_style_formidable-style.with_frm_style .placeholder,
.frm_style_formidable-style.with_frm_style .chosen-container-multi .chosen-choices li.search-field .default,
.frm_style_formidable-style.with_frm_style .chosen-container-single .chosen-default{
	color: #a1a1a1;
}

.frm_style_formidable-style.with_frm_style .form-field input:not([type=file]):focus,
.frm_style_formidable-style.with_frm_style select:focus,
.frm_style_formidable-style.with_frm_style textarea:focus,
.frm_style_formidable-style.with_frm_style .frm_focus_field input[type=text],
.frm_style_formidable-style.with_frm_style .frm_focus_field input[type=password],
.frm_style_formidable-style.with_frm_style .frm_focus_field input[type=email],
.frm_style_formidable-style.with_frm_style .frm_focus_field input[type=number],
.frm_style_formidable-style.with_frm_style .frm_focus_field input[type=url],
.frm_style_formidable-style.with_frm_style .frm_focus_field input[type=tel],
.frm_style_formidable-style.with_frm_style .frm_focus_field input[type=search],
.frm_form_fields_active_style,
.frm_style_formidable-style.with_frm_style .frm_focus_field .frm-card-element.StripeElement,
.frm_style_formidable-style.with_frm_style .chosen-container-single.chosen-container-active .chosen-single,
.frm_style_formidable-style.with_frm_style .chosen-container-active .chosen-choices{
	background-color:#ffffff;
	border-color:#8338ec;
		box-shadow:none;
	}

.frm_style_formidable-style.with_frm_style .frm_compact .frm_dropzone.dz-clickable .dz-message,
.frm_style_formidable-style.with_frm_style input[type=submit],
.frm_style_formidable-style.with_frm_style .frm_submit input[type=button],
.frm_style_formidable-style.with_frm_style .frm_submit button,
.frm_form_submit_style,
.frm_style_formidable-style.with_frm_style .frm-edit-page-btn {
	width:auto;
	font-family:"Fira Sans", Sans-serif;
	font-size:18px;
	height:auto;
	line-height:normal;
	text-align:center;
	background:
	#8338ec	;
	border-width:0px;
	border-color: #ffffff;
	border-style:solid;
	color:#ffffff;
	cursor:pointer;
	font-weight:normal;
	-moz-border-radius:100px;
	-webkit-border-radius:100px;
	border-radius:100px;
	text-shadow:none;
	padding:10px 25px;
	-moz-box-sizing:border-box;
	box-sizing:border-box;
	-ms-box-sizing:border-box;
		-moz-box-shadow:0 1px 1px #ffffff;
	-webkit-box-shadow:0 1px 1px #ffffff;
	box-shadow:0 1px 1px #ffffff;
		margin:10px;
	margin-left:0;
	margin-right:0;
	vertical-align:middle;
}

.frm_style_formidable-style.with_frm_style .frm_compact .frm_dropzone.dz-clickable .dz-message{
	margin:0;
}

	.frm_style_formidable-style.with_frm_style .frm-edit-page-btn:hover,
.frm_style_formidable-style.with_frm_style input[type=submit]:hover,
.frm_style_formidable-style.with_frm_style .frm_submit input[type=button]:hover,
.frm_style_formidable-style.with_frm_style .frm_submit button:hover{
	background: #ff006e;
	border-color: #ffffff;
	color: #ffffff;
}

.frm_style_formidable-style.with_frm_style.frm_center_submit .frm_submit .frm_ajax_loading{
	margin-bottom:10px;
}

.frm_style_formidable-style.with_frm_style .frm-edit-page-btn:focus,
.frm_style_formidable-style.with_frm_style input[type=submit]:focus,
.frm_style_formidable-style.with_frm_style .frm_submit input[type=button]:focus,
.frm_style_formidable-style.with_frm_style .frm_submit button:focus,
.frm_style_formidable-style.with_frm_style input[type=submit]:active,
.frm_style_formidable-style.with_frm_style .frm_submit input[type=button]:active,
.frm_style_formidable-style.with_frm_style .frm_submit button:active{
	background: #ff006e;
	border-color: #ffffff;
	color: #ffffff;
}

.frm_style_formidable-style.with_frm_style .frm_loading_prev .frm_prev_page,
.frm_style_formidable-style.with_frm_style .frm_loading_prev .frm_prev_page:hover,
.frm_style_formidable-style.with_frm_style .frm_loading_prev .frm_prev_page:active,
.frm_style_formidable-style.with_frm_style .frm_loading_prev .frm_prev_page:focus,
.frm_style_formidable-style.with_frm_style .frm_loading_form .frm_button_submit,
.frm_style_formidable-style.with_frm_style .frm_loading_form .frm_button_submit:hover,
.frm_style_formidable-style.with_frm_style .frm_loading_form .frm_button_submit:active,
.frm_style_formidable-style.with_frm_style .frm_loading_form .frm_button_submit:focus{
	color: transparent ;
	background: #8338ec;
}

.frm_style_formidable-style.with_frm_style .frm_loading_prev .frm_prev_page:before,
.frm_style_formidable-style.with_frm_style .frm_loading_form .frm_button_submit:before {
	border-bottom-color: #ffffff;
	border-right-color: #ffffff;
				}
		
.frm_style_formidable-style.with_frm_style.frm_inline_top .frm_submit::before,
.frm_style_formidable-style.with_frm_style .frm_submit.frm_inline_submit::before {
	content:"before";
	font-family:"Fira Sans", Sans-serif;
	font-size:16px;
	color:#0f122e;
	font-weight:normal;
	margin:0;
	padding:0 0 10px 0;
	width:auto;
	display:block;
	visibility:hidden;
}

.frm_style_formidable-style.with_frm_style.frm_inline_form .frm_submit input,
.frm_style_formidable-style.with_frm_style.frm_inline_form .frm_submit button,
.frm_style_formidable-style.with_frm_style .frm_submit.frm_inline_submit input,
.frm_style_formidable-style.with_frm_style .frm_submit.frm_inline_submit button {
	margin: 0 !important;
}

.frm_style_formidable-style.with_frm_style a.frm_save_draft{
	font-family:"Fira Sans", Sans-serif;
	font-size:18px;
	font-weight:normal;
}

.frm_style_formidable-style.with_frm_style #frm_field_cptch_number_container{
	font-family:"Fira Sans", Sans-serif;
	font-size:16px;
	color:#0f122e;
	font-weight:normal;
	clear:both;
}

.frm_style_formidable-style.with_frm_style .frm_radio{
	display:block;
}

.frm_style_formidable-style.with_frm_style .frm_checkbox{
	display:block;
}

.frm_style_formidable-style.with_frm_style .vertical_radio .frm_checkbox,
.frm_style_formidable-style.with_frm_style .vertical_radio .frm_radio,
.vertical_radio .frm_catlevel_1{
	display:block;
}

.frm_style_formidable-style.with_frm_style .horizontal_radio .frm_checkbox,
.frm_style_formidable-style.with_frm_style .horizontal_radio .frm_radio,
.horizontal_radio .frm_catlevel_1{
	display:inline-block;
}

.frm_style_formidable-style.with_frm_style .frm_radio label,
.frm_style_formidable-style.with_frm_style .frm_checkbox label{
	font-family:"Fira Sans", Sans-serif;
	font-size:14px;
	color:#0f122e;
	font-weight:normal;
}

.frm_style_formidable-style.with_frm_style .frm_radio input[type=radio],
.frm_style_formidable-style.with_frm_style .frm_checkbox input[type=checkbox] {
	font-size: 14px;
	position: static;
}

.frm_style_formidable-style.with_frm_style .frm_blank_field input[type=text],
.frm_style_formidable-style.with_frm_style .frm_blank_field input[type=password],
.frm_style_formidable-style.with_frm_style .frm_blank_field input[type=url],
.frm_style_formidable-style.with_frm_style .frm_blank_field input[type=tel],
.frm_style_formidable-style.with_frm_style .frm_blank_field input[type=number],
.frm_style_formidable-style.with_frm_style .frm_blank_field input[type=email],
.frm_style_formidable-style.with_frm_style .frm_blank_field textarea,
.frm_style_formidable-style.with_frm_style .frm_blank_field .mce-edit-area iframe,
.frm_style_formidable-style.with_frm_style .frm_blank_field select,
.frm_form_fields_error_style,
.frm_style_formidable-style.with_frm_style .frm_blank_field .frm-g-recaptcha iframe,
.frm_style_formidable-style.with_frm_style .frm_blank_field .g-recaptcha iframe,
.frm_style_formidable-style.with_frm_style .frm_blank_field .frm-card-element.StripeElement,
.frm_style_formidable-style.with_frm_style .frm_blank_field .chosen-container-multi .chosen-choices,
.frm_style_formidable-style.with_frm_style .frm_blank_field .chosen-container-single .chosen-single,
.frm_style_formidable-style.with_frm_style .frm_form_field :invalid{
	color:#444444;
	background-color:#ffffff;
	border-color:#ff006e;
	border-width:1px;
	border-style:solid;
}

.frm_style_formidable-style.with_frm_style .frm_blank_field .sigWrapper{
	border-color:#ff006e !important;
}

.frm_style_formidable-style.with_frm_style .frm_error{
	font-weight:normal;
}

.frm_style_formidable-style.with_frm_style .frm_blank_field label,
.frm_style_formidable-style.with_frm_style .frm_error{
	color:#ff006e;
}

.frm_style_formidable-style.with_frm_style .frm_error_style{
	background-color:#fff7f9;
	border:1px solid #ffc4d4;
	border-radius:100px;
	color: #ff006e;
	font-size:14px;
	margin:0;
	margin-bottom:20px;
}

.frm_style_formidable-style.with_frm_style .frm_message,
.frm_success_style{
	border:1px solid #D6E9C6;
	background-color:#DFF0D8;
	color:#468847;
	border-radius:100px;
}

.frm_style_formidable-style.with_frm_style .frm_message p{
	color:#468847;
}

.frm_style_formidable-style.with_frm_style .frm_message{
	margin:5px 0 15px;
	font-size:14px;
}

.frm_style_formidable-style.with_frm_style .frm-grid td,
.frm-grid th{
	border-color:#0f122e;
}

.form_results.frm_style_formidable-style.with_frm_style{
	border:1px solid #0f122e;
}

.form_results.frm_style_formidable-style.with_frm_style tr td{
	color: #0f122e;
	border-top:1px solid #0f122e;
}

.form_results.frm_style_formidable-style.with_frm_style tr.frm_even,
.frm-grid .frm_even{
	background-color:#ffffff;
}

.frm_style_formidable-style.with_frm_style #frm_loading .progress-striped .progress-bar{
	background-image:linear-gradient(45deg, #0f122e 25%, rgba(0, 0, 0, 0) 25%, rgba(0, 0, 0, 0) 50%, #0f122e 50%, #0f122e 75%, rgba(0, 0, 0, 0) 75%, rgba(0, 0, 0, 0));
}

.frm_style_formidable-style.with_frm_style #frm_loading .progress-bar{
	background-color:#ffffff;
}

.frm_style_formidable-style.with_frm_style .frm_grid,
.frm_style_formidable-style.with_frm_style .frm_grid_first,
.frm_style_formidable-style.with_frm_style .frm_grid_odd{
	border-color:#0f122e;
}

.frm_style_formidable-style.with_frm_style .frm_grid.frm_blank_field,
.frm_style_formidable-style.with_frm_style .frm_grid_first.frm_blank_field,
.frm_style_formidable-style.with_frm_style .frm_grid_odd.frm_blank_field{
	background-color:#fff7f9;
	border-color:#ffc4d4;
}

.frm_style_formidable-style.with_frm_style .frm_grid_first,
.frm_style_formidable-style.with_frm_style .frm_grid_odd{
	background-color:#ffffff;
}

.frm_style_formidable-style.with_frm_style .frm_grid{
	background-color:#ffffff;
}

.frm_style_formidable-style.with_frm_style .frm_html_container.frm_scroll_box,
.frm_style_formidable-style.with_frm_style .frm_form_field.frm_html_scroll_box{
	background-color:#ffffff;
	border-color: #0f122e;
	border-width:1px;
	border-style:solid;
	-moz-border-radius:100px;
	-webkit-border-radius:100px;
	border-radius:100px;
	width:100%;
	font-size:14px;
	padding:6px 25px;
	outline:none;
}

.frm_style_formidable-style.with_frm_style .frm_form_field.frm_total input,
.frm_style_formidable-style.with_frm_style .frm_form_field.frm_total textarea{
	color: #0f122e;
	background-color:transparent;
	border:none;
	display:inline;
	width:auto;
	padding:0;
}

.frm_style_formidable-style.with_frm_style .frm_button{
	padding:10px 25px;
	-moz-border-radius:100px;
	-webkit-border-radius:100px;
	border-radius:100px;
	font-size:18px;
	font-family:"Fira Sans", Sans-serif;
	font-weight:normal;
	color:#ffffff;
	background: #8338ec;
	border-width:0px;
	border-color: #ffffff;
	height:auto;
}

.frm_style_formidable-style.with_frm_style .frm_button .frm_icon_font:before{
    font-size:18px;
}

/* Dropzone */
.frm_style_formidable-style.with_frm_style .frm_dropzone{
	border-color: #0f122e;
	border-radius:100px;
	color: #0f122e;
	background-color:#ffffff;
}

.frm_style_formidable-style.with_frm_style .frm_dropzone .frm_upload_icon:before,
.frm_style_formidable-style.with_frm_style .frm_dropzone .dz-remove{
	color: #0f122e;
}

.frm_style_formidable-style.with_frm_style .frm_compact .frm_dropzone .frm_upload_icon:before {
	color: #ffffff;
}

.frm_style_formidable-style.with_frm_style .frm_blank_field .frm_dropzone{
	border-color:#ff006e;
	color:#444444;
	background-color:#ffffff;
}

.frm_style_formidable-style.with_frm_style .frm_dropzone .dz-preview .dz-progress {
	background: #dddddd;
}

.frm_style_formidable-style.with_frm_style .frm_dropzone .dz-preview .dz-progress .dz-upload,
.frm_style_formidable-style.with_frm_style .frm_dropzone .dz-preview.dz-complete .dz-progress {
    background: #4199FD;
}

/* File Upload */

.frm_style_formidable-style.with_frm_style input[type=file]::-webkit-file-upload-button{
	color:#0f122e;
	background-color:#ffffff;
	padding:6px 25px;
	border-radius:100px;
	border-color: #0f122e;
	border-width:1px;
	border-style:solid;
}

/* Start Chosen */
.frm_style_formidable-style.with_frm_style .chosen-container{
	font-size:14px;
}

.frm_style_formidable-style.with_frm_style .chosen-container .chosen-results li,
.frm_style_formidable-style.with_frm_style .chosen-container .chosen-results li span{
	color:#0f122e;
}

.frm_style_formidable-style.with_frm_style .chosen-container-single .chosen-single{
	padding-top:0 ;
	height:45px;
	line-height:45px;
}

.frm_style_formidable-style.with_frm_style .chosen-container-single .chosen-single abbr{
    top:9px ;
}

.frm_style_formidable-style.with_frm_style .chosen-container-single .chosen-single div{
	top:3px;
}

.frm_style_formidable-style.with_frm_style .chosen-container-single .chosen-search input[type="text"]{
	height:45px;
}

.frm_style_formidable-style.with_frm_style .chosen-container-multi .chosen-choices li.search-field input[type="text"]{
	height:15px;
}
/* End Chosen */

/* Progress Bars */
.frm_style_formidable-style.with_frm_style .frm_page_bar input,
.frm_style_formidable-style.with_frm_style .frm_page_bar input:disabled{
	color: #ffffff;
	background-color: #dddddd;
	border-color: #dfdfdf;
	border-width: 2px;
}

.frm_style_formidable-style.with_frm_style .frm_progress_line input.frm_page_back{
	background-color: #4199FD;
}

.frm_style_formidable-style.with_frm_style .frm_page_bar .frm_current_page input[type="button"]{
	background-color: #dddddd;
	border-color: #dfdfdf;
	opacity:1;
}

.frm_style_formidable-style.with_frm_style .frm_current_page .frm_rootline_title{
	color: #4199FD;
}

.frm_style_formidable-style.with_frm_style .frm_rootline_title,
.frm_style_formidable-style.with_frm_style .frm_pages_complete,
.frm_style_formidable-style.with_frm_style .frm_percent_complete{
	color: #666666;
}

.frm_style_formidable-style.with_frm_style .frm_progress_line input,
.frm_style_formidable-style.with_frm_style .frm_progress_line input:disabled {
	border-color: #dfdfdf;
}

.frm_style_formidable-style.with_frm_style .frm_progress_line.frm_show_lines input {
	border-left-color: #ffffff;
	border-right-color: #ffffff;
	border-left-width: 1px ;
	border-right-width: 1px ;
}

.frm_style_formidable-style.with_frm_style .frm_progress_line li:first-of-type input {
	border-left-color: #4199FD;
}

.frm_style_formidable-style.with_frm_style .frm_progress_line li:last-of-type input {
	border-right-color: #4199FD;
}

.frm_style_formidable-style.with_frm_style .frm_progress_line li:last-of-type input.frm_page_skip {
	border-right-color: #dfdfdf;
}

.frm_style_formidable-style.with_frm_style .frm_progress_line .frm_current_page input[type="button"] {
	border-left-color: #dfdfdf;
}

.frm_style_formidable-style.with_frm_style .frm_progress_line.frm_show_lines .frm_current_page input[type="button"] {
	border-right-color: #ffffff;
}

.frm_style_formidable-style.with_frm_style .frm_progress_line input.frm_page_back {
	border-color: #4199FD;
}

.frm_style_formidable-style.with_frm_style .frm_progress_line.frm_show_lines input.frm_page_back{
	border-left-color: #4199FD;
	border-right-color: #ffffff;
}

.frm_style_formidable-style.with_frm_style .frm_rootline.frm_show_lines:before {
	border-color: #dfdfdf;
	border-top-width: 2px;
	top: 15px;
}

.frm_style_formidable-style.with_frm_style .frm_rootline input,
.frm_style_formidable-style.with_frm_style .frm_rootline input:hover {
	width: 30px;
	height: 30px;
	border-radius: 30px;
	padding: 0;
}

.frm_style_formidable-style.with_frm_style .frm_rootline input:focus {
	border-color: #4199FD;
}

.frm_style_formidable-style.with_frm_style .frm_rootline .frm_current_page input[type="button"] {
	border-color: #2d85e9;
	background-color: #4199FD;
	color: #ffffff;
}

.frm_style_formidable-style.with_frm_style .frm_progress_line input,
.frm_style_formidable-style.with_frm_style .frm_progress_line input:disabled,
.frm_style_formidable-style.with_frm_style .frm_progress_line .frm_current_page input[type="button"],
.frm_style_formidable-style.with_frm_style .frm_rootline.frm_no_numbers input,
.frm_style_formidable-style.with_frm_style .frm_rootline.frm_no_numbers .frm_current_page input[type="button"] {
	color: transparent !important;
}

/* Start Range slider */

.frm_style_formidable-style.with_frm_style .frm_range_unit,
.frm_style_formidable-style.with_frm_style .frm_range_value{
	font-size:14px;
}

.frm_style_formidable-style.with_frm_style .form-field input[type=range],
.frm_style_formidable-style.with_frm_style .form-field input[type=range]:focus {
	padding:0 ;
	background:transparent !important;
}

.frm_style_formidable-style.with_frm_style input[type=range]::-webkit-slider-runnable-track {
	background-color:#dfdfdf;
	border-radius:100px;
}

.frm_style_formidable-style.with_frm_style input[type=range]::-webkit-slider-thumb {
	border: 1px solid #8338ec;
	color:#ffffff;}

.frm_style_formidable-style.with_frm_style input[type=range]::-ms-fill-lower {
	background-color: #8338ec;
}

.frm_style_formidable-style.with_frm_style input[type=range]::-moz-range-progress {
	background-color: #8338ec;
}

.frm_style_formidable-style.with_frm_style input[type=range]::-moz-range-thumb {
	border: 1px solid #8338ec;
	color:#ffffff;}

.frm_style_formidable-style.with_frm_style input[type=range]::-ms-thumb {
	border: 1px solid #8338ec;
	color:#ffffff;}

/* End Range Slider */

/* Start Toggle */
.frm_style_formidable-style.with_frm_style .frm_switch_opt{
	font-size:14px;
	font-weight:normal;
}

.frm_style_formidable-style.with_frm_style .frm_on_label{
	color:#8338ec;
}

.frm_style_formidable-style.with_frm_style .frm_off_label{
	color:#0f122e;
}

.frm_style_formidable-style.with_frm_style .frm_slider {
	background-color:#dfdfdf;
}

.frm_style_formidable-style.with_frm_style input:checked + .frm_slider {
	background-color:#8338ec;
}

/* End Toggle */

/* Start other fields */
.frm_style_formidable-style.with_frm_style input.frm_other_input:not(.frm_other_full){
    width:auto ;
}

.frm_style_formidable-style.with_frm_style .frm_checkbox input.frm_other_input:not(.frm_other_full),
.frm_style_formidable-style.with_frm_style .frm_radio input.frm_other_input:not(.frm_other_full){
	margin-left:5px;
}

.frm_style_formidable-style.with_frm_style .horizontal_radio input.frm_other_input:not(.frm_other_full):not(.frm_pos_none) {
	display:inline-block;
}

.frm_style_formidable-style.with_frm_style .frm_full input.frm_other_input:not(.frm_other_full){
    margin-left:0 ;
    margin-top:8px;
}
/* End other */

/* Start Password field */
.frm_style_formidable-style.with_frm_style span.frm-pass-verified::before {
    color:#468847;
}

.frm_style_formidable-style.with_frm_style span.frm-pass-req::before {
    color:#ff006e;
}
/* End Password field */

/* Sections */
.frm_style_formidable-style.with_frm_style .frm-show-form  .frm_section_heading h3{
    padding:15px 0 3px 0;
    margin:0;
    font-size:18px;
	font-family:"Fira Sans", Sans-serif;
    font-weight:bold;
    color:#444444;
    border:none;
	border-top:2px solid #e8e8e8;
    background-color:transparent}

.frm_style_formidable-style.with_frm_style h3 .frm_after_collapse{
    display:inline;
}
.frm_style_formidable-style.with_frm_style h3 .frm_before_collapse{
    display:none;
}

.menu-edit #post-body-content .frm_style_formidable-style.with_frm_style .frm_section_heading h3{
    margin:0;
}

.frm_style_formidable-style.with_frm_style .frm_section_heading{
    margin-top:15px;
}

.frm_style_formidable-style.with_frm_style  .frm-show-form .frm_section_heading .frm_section_spacing,
.menu-edit #post-body-content .frm_style_formidable-style.with_frm_style  .frm-show-form .frm_section_heading .frm_section_spacing{
    margin-bottom:12px;
}

.frm_style_formidable-style.with_frm_style .frm_repeat_sec{
	margin-bottom:20px;
	margin-top:20px;
	border-bottom:2px solid #e8e8e8;
}

/* End Sections */

/* Summary Field */

.frm_style_formidable-style.with_frm_style .frm-summary-page-wrapper {
	border-color: #0f122e;
	border-radius: 100px;
}

/* End Summary Field */

.frm_style_formidable-style.with_frm_style .frm_single_product_label,
.frm_style_formidable-style.with_frm_style .frm_total_formatted {
	font-size:16px;
	color:#0f122e;
}

@media only screen and (max-width: 600px){
	.frm_style_formidable-style.with_frm_style .frm_repeat_inline,
	.frm_style_formidable-style.with_frm_style .frm_repeat_grid{
		margin: 20px 0;
	}
}


.frm_ajax_loading{
	visibility:hidden;
	width:auto;
}

.frm_form_submit_style{
	height:auto;
}

a.frm_save_draft{
	cursor:pointer;
}

.horizontal_radio .frm_radio{
	margin:0 5px 0 0;
}

.horizontal_radio .frm_checkbox{
	margin:0;
	margin-right:5px;
}

.vertical_radio .frm_checkbox,
.vertical_radio .frm_radio,
.vertical_radio .frm_catlevel_1{
	display:block;
}

.horizontal_radio .frm_checkbox,
.horizontal_radio .frm_radio,
.horizontal_radio .frm_catlevel_1{
	display:inline-block;
}

.with_frm_style .frm_checkbox label,
.with_frm_style .frm_radio label{
	display: inline;
	white-space:normal;
}

.with_frm_style .vertical_radio .frm_checkbox label,
.with_frm_style .vertical_radio .frm_radio label{
	display: block;
	padding-left: 20px;
	text-indent: -20px;
}

.frm_file_container .frm_file_link,
.with_frm_style .frm_radio label .frm_file_container,
.with_frm_style .frm_checkbox label .frm_file_container{
	display:inline-block;
	margin:5px;
	vertical-align:middle;
}

.with_frm_style .frm_radio input[type=radio]{
	-webkit-appearance:radio;
	border-radius:50%;
}

.with_frm_style .frm_checkbox input[type=checkbox]{
	-webkit-appearance:checkbox;
	border-radius:0;
}

.with_frm_style .frm_radio input[type=radio],
.with_frm_style .frm_checkbox input[type=checkbox]{
	flex: none;
	display:inline-block;
	margin:4px 5px 0 0;
	width:auto;
	border:none;
	vertical-align:baseline;
	position: initial; /* override Bootstrap */
}

.with_frm_style :invalid,
.with_frm_style :-moz-submit-invalid,
.with_frm_style :-moz-ui-invalid{
	box-shadow:none;
}

.with_frm_style .frm_error_style img{
	padding-right:10px;
	vertical-align:middle;
	border:none;
}

.with_frm_style .frm_trigger{
	cursor:pointer;
}

.with_frm_style .frm_error_style,
.with_frm_style .frm_message,
.frm_success_style{
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
	border-radius:4px;
	padding:15px;
}

.with_frm_style .frm_message p{
	margin-bottom:5px;
}

.frm_form_fields_style,
.frm_form_fields_active_style,
.frm_form_fields_error_style,
.frm_form_submit_style{
	width:auto;
}

.with_frm_style .frm_trigger span{
	float:left;
}

.with_frm_style table.frm-grid,
#content .with_frm_style table.frm-grid{
	border-collapse:collapse;
	border:none;
}

.frm-grid td,
.frm-grid th{
	padding:5px;
	border-width:1px;
	border-style:solid;
	border-color:#0f122e;
	border-top:none;
	border-left:none;
	border-right:none;
}

.frm-alt-table {
	width:100%;
	border-collapse:collapse;
	margin-top:0.5em;
	font-size:15px;
}

.frm-alt-table th {
	width:200px;
}

.frm-alt-table tr {
	background-color:transparent;
}

.frm-alt-table th,
.frm-alt-table td {
	background-color:transparent;
	vertical-align:top;
	text-align:left;
	padding:20px;
}

.frm-alt-table tr:nth-child(even) {
	background-color:#3c3f5b;
}

table.form_results.with_frm_style{
	border:1px solid #ccc;
}

table.form_results.with_frm_style tr td{
	text-align:left;
	color:#0f122e;
	padding:7px 9px;
	border-top:1px solid #0f122e;
}

table.form_results.with_frm_style tr.frm_even,
.frm-grid .frm_even{
	background-color:#fff;
}

table.form_results.with_frm_style tr.frm_odd,
.frm-grid .frm_odd{
	background-color:#3c3f5b;
}

.frm_collapse .ui-icon{
	display:inline-block;
}

.frm_toggle_container{
	/* Prevent the slide and bounce */
	border:1px solid transparent;
}

.frm_toggle_container ul{
	margin:5px 0;
	padding-left:0;
	list-style-type:none;
}

.frm_toggle_container .frm_month_heading{
	text-indent:15px;
}

.frm_toggle_container .frm_month_listing{
	margin-left:40px;
}

#frm_loading{
	display:none;
	position:fixed;
	top:0;
	left:0;
	width:100%;
	height:100%;
	z-index:99999;
}

#frm_loading h3{
	font-weight:500;
	padding-bottom:15px;
	color:#fff;
	font-size:24px;
}

#frm_loading_content{
	position:fixed;
	top:20%;
	left:33%;
	width:33%;
	text-align:center;
	padding-top:30px;
	font-weight:bold;
	z-index:9999999;
}

#frm_loading img{
	max-width:100%;
}

#frm_loading .progress{
	border-radius:4px;
	box-shadow:0 1px 2px rgba(0, 0, 0, 0.1) inset;
	height:20px;
	margin-bottom:20px;
	overflow:hidden;
}

#frm_loading .progress.active .progress-bar{
	animation:2s linear 0s normal none infinite progress-bar-stripes;
}

#frm_loading .progress-striped .progress-bar{
	background-image:linear-gradient(45deg, #0f122e 25%, rgba(0, 0, 0, 0) 25%, rgba(0, 0, 0, 0) 50%, #0f122e 50%, #0f122e 75%, rgba(0, 0, 0, 0) 75%, rgba(0, 0, 0, 0));
	background-size:40px 40px;
}

#frm_loading .progress-bar{
	background-color:#ffffff;
	box-shadow:0 -1px 0 rgba(0, 0, 0, 0.15) inset;
	float:left;
	height:100%;
	line-height:20px;
	text-align:center;
	transition:width 0.6s ease 0s;
	width:100%;
}

.frm_image_from_url{
	height:50px;
}

.frm-loading-img{
	background:url(../images/ajax_loader.gif) no-repeat center center;
	padding:6px 12px;
}

select.frm_loading_lookup{
	background-image: url(../images/ajax_loader.gif) !important;
	background-position: 10px;
	background-repeat: no-repeat;
	color: transparent !important;
}

.frm_screen_reader {
	border: 0;
	clip: rect(1px, 1px, 1px, 1px);
	-webkit-clip-path: inset(50%);
	clip-path: inset(50%);
	height: 1px;
	margin: -1px;
	overflow: hidden;
	padding: 0;
	position: absolute;
	width: 1px;
	word-wrap: normal !important; /* many screen reader and browser combinations announce broken words as they would appear visually */
}
.frm_screen_reader.frm_hidden{
	display:initial;
}

.frm_clear_none{
    clear:none;
}

.frm_clear{
    clear:both;
}

.frm_form_field.frm_alignright{
	float:right !important;
}

.with_frm_style .frm_form_field{
    clear:both;
}

.frm_combo_inputs_container,
.frm_grid_container,
.frm_form_fields .frm_section_heading,
.frm_form_fields .frm_fields_container{
	display:grid;
	grid-template-columns: repeat(12, 6.5%);
	grid-auto-rows: max-content;
	grid-gap: 0 2%;
}

.frm_combo_inputs_container > *,
.frm_grid_container > *,
.frm_section_heading > *,
.frm_fields_container .frm_form_field,
.frm_fields_container > *{
	grid-column: span 12 / span 12;
}

.frm_inline,
.frm_form_field.frm_left_inline,
.frm_form_field.frm_first_inline,
.frm_form_field.frm_inline,
.frm_submit.frm_inline,
.frm_form_field.frm_right_inline,
.frm_form_field.frm_last_inline{
    width:auto;
	grid-column: span 2 / span 2;
}

.frm6,
.frm_half,
.frm_form_field.frm_three_fifths, /* 5ths deprecated */
.frm_form_field.frm6,
.frm_submit.frm6,
.frm_form_field.frm_left_half,
.frm_form_field.frm_right_half,
.frm_form_field.frm_first_half,
.frm_form_field.frm_last_half,
.frm_form_field.frm_half,
.frm_submit.frm_half{
    grid-column:span 6 / span 6;
}

.frm4,
.frm_third,
.frm_form_field.frm_two_fifths, /* 5ths deprecated */
.frm_form_field.frm4,
.frm_submit.frm4,
.frm_form_field.frm_left_third,
.frm_form_field.frm_third,
.frm_submit.frm_third,
.frm_form_field.frm_right_third,
.frm_form_field.frm_first_third,
.frm_form_field.frm_last_third{
    grid-column:span 4 / span 4;
}

.frm8,
.frm_two_thirds,
.frm_form_field.frm8,
.frm_submit.frm8,
.frm_form_field.frm_left_two_thirds,
.frm_form_field.frm_right_two_thirds,
.frm_form_field.frm_first_two_thirds,
.frm_form_field.frm_last_two_thirds,
.frm_form_field.frm_two_thirds{
    grid-column: span 8/span 8;
}

.frm3,
.frm_fourth,
.frm_form_field.frm3,
.frm_submit.frm3,
.frm_form_field.frm_left_fourth,
.frm_form_field.frm_fourth,
.frm_submit.frm_fourth,
.frm_form_field.frm_right_fourth,
.frm_form_field.frm_first_fourth,
.frm_form_field.frm_last_fourth{
    grid-column: span 3/span 3;
}

.frm9,
.frm_three_fourths,
.frm_form_field.frm_four_fifths, /* 5ths deprecated */
.frm_form_field.frm9,
.frm_submit.frm9,
.frm_form_field.frm_three_fourths{
	grid-column: span 9/span 9;
}

/* fifths are deprecated */
.frm_form_field.frm_left_fifth,
.frm_form_field.frm_fifth,
.frm_submit.frm_fifth,
.frm_form_field.frm_right_fifth,
.frm_form_field.frm_first_fifth,
.frm_form_field.frm_last_fifth{
    grid-column: span 2/span 2;
}

.frm2,
.frm_sixth,
.frm_form_field.frm2,
.frm_submit.frm2,
.frm_form_field.frm_sixth,
.frm_submit.frm_sixth,
.frm_form_field.frm_first_sixth,
.frm_form_field.frm_last_sixth{
    grid-column: span 2/span 2;
}

.frm10,
.frm_form_field.frm10,
.frm_submit.frm10{
	grid-column: span 10/span 10;
}

.frm1,
.frm_form_field.frm1,
.frm_submit.frm1,
/* 7ths and 8ths are deprecated */
.frm_form_field.frm_seventh,
.frm_submit.frm_seventh,
.frm_form_field.frm_first_seventh,
.frm_form_field.frm_last_seventh
.frm_form_field.frm_eighth,
.frm_submit.frm_eighth,
.frm_form_field.frm_first_eighth,
.frm_form_field.frm_last_eighth{
    grid-column: span 1/span 1;
}

.frm5,
.frm_form_field.frm5,
.frm_submit.frm5{
	grid-column: span 5/span 5;
}

.frm7,
.frm_form_field.frm7,
.frm_submit.frm7{
	grid-column: span 7/span 7;
}

.frm11,
.frm_form_field.frm11,
.frm_submit.frm11{
	grid-column: span 11/span 11;
}

.frm12,
.frm_full,
.frm_full .wp-editor-wrap,
.frm_full input:not([type='checkbox']):not([type='radio']):not([type='button']),
.frm_full select,
.frm_full textarea{
    width:100% !important;
	grid-column: span 12/span 12;
	box-sizing: border-box;
}

.frm_full .wp-editor-wrap input{
    width:auto !important;
}

.frm_first,
.frm_form_field.frm_left_half,
.frm_form_field.frm_left_third,
.frm_form_field.frm_left_two_thirds,
.frm_form_field.frm_left_fourth,
.frm_form_field.frm_left_fifth,
.frm_form_field.frm_left_inline,
.frm_form_field.frm_first_half,
.frm_form_field.frm_first_third,
.frm_form_field.frm_first_two_thirds,
.frm_form_field.frm_first_fourth,
.frm_form_field.frm_first_fifth,
.frm_form_field.frm_first_sixth,
.frm_form_field.frm_first_seventh,
.frm_form_field.frm_first_eighth,
.frm_form_field.frm_first_inline,
.frm_form_field.frm_first{
	grid-column-start:1;
}

.frm_last,
.frm_form_field.frm_last,
.frm_form_field.frm_alignright{
	grid-column-end:-1;
	grid-row-start: span 100;
	justify-content: end;
}

/* RTL Grids */

.with_frm_style.frm_rtl .frm_form_fields .star-rating{
    float:right;
}

.with_frm_style.frm_rtl .frm_grid .frm_primary_label,
.with_frm_style.frm_rtl .frm_grid_first .frm_primary_label,
.with_frm_style.frm_rtl .frm_grid_odd .frm_primary_label,
.with_frm_style.frm_rtl .frm_grid .frm_radio,
.with_frm_style.frm_rtl .frm_grid_first .frm_radio,
.with_frm_style.frm_rtl .frm_grid_odd .frm_radio,
.with_frm_style.frm_rtl .frm_grid .frm_checkbox,
.with_frm_style.frm_rtl .frm_grid_first .frm_checkbox,
.with_frm_style.frm_rtl .frm_grid_odd .frm_checkbox{
    float:right !important;
    margin-right:0 !important;
}

.with_frm_style.frm_rtl .frm_grid_first .frm_radio label input,
.with_frm_style.frm_rtl .frm_grid .frm_radio label input,
.with_frm_style.frm_rtl .frm_grid_odd .frm_radio label input,
.with_frm_style.frm_rtl .frm_grid_first .frm_checkbox label input,
.with_frm_style.frm_rtl .frm_grid .frm_checkbox label input,
.with_frm_style.frm_rtl .frm_grid_odd .frm_checkbox label input{
    float:left;
}

.with_frm_style.frm_rtl .frm_catlevel_2,
.with_frm_style.frm_rtl .frm_catlevel_3,
.with_frm_style.frm_rtl .frm_catlevel_4,
.with_frm_style.frm_rtl .frm_catlevel_5{
	margin-right:18px;
}

.with_frm_style.frm_rtl div > .frm_time_select{
	margin-right:5px;
}

/* Left and right label styling for non-Formidable styling */

.frm_form_field.frm_inline_container,
.frm_form_field.frm_right_container,
.frm_form_field.frm_left_container{
    display: grid;
    grid-template-columns: 25% auto;
	width:100%;
	grid-auto-rows: min-content;
}

.frm_form_field.frm_right_container{
    grid-template-columns: auto 25%;
}

.frm_form_field.frm_inline_container{
    grid-template-columns: repeat(2, minmax(auto, max-content) );
}

.frm_form_field.frm_inline_container .frm_primary_label,
.frm_form_field.frm_right_container .frm_primary_label,
.frm_form_field.frm_left_container .frm_primary_label{
	margin-right:10px;
	grid-row:span 2/span 2;
	padding-top:4px;
}

.frm_form_field.frm_left_container .frm_primary_label{
	grid-column:1;
	grid-row:span 2/span 2; /* cover a row for the description */
}

.frm_form_field.frm_right_container .frm_primary_label{
	grid-column:2;
	grid-row:1;
	margin-right:0;
	margin-left:10px;
}

.frm_form_field.frm_inline_container .frm_description,
.frm_form_field.frm_left_container .frm_description{
	grid-column:2;
}

.frm_form_field.frm_right_container .frm_description{
	grid-column:1;
}

.frm_conf_field.frm_left_container{
	grid-template-columns: 67%;
}

.frm_conf_field.frm_left_container .frm_description{
	grid-column:1;
}

/* End RTL Grids */

.frm-fade-in {
	-webkit-animation-name: fadeIn;
	animation-name: fadeIn;
	-webkit-animation-duration: 1s;
	animation-duration: 1s;
	-webkit-animation-fill-mode: both;
	animation-fill-mode: both;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

@keyframes fadeIn {
   0% {opacity: 0;}
   100% {opacity: 1;}
}

@media only screen and (max-width: 600px) {
	.frm_section_heading > .frm_form_field,
	.frm_fields_container > .frm_submit,
	.frm_grid_container > .frm_form_field,
	.frm_fields_container > .frm_form_field{
		grid-column: 1 / span 12 !important;
	}

	.frm_form_field.frm_inline_container,
	.frm_form_field.frm_right_container,
	.frm_form_field.frm_left_container{
		display:block;
	}
}
.frm_conf_field.frm_left_container .frm_primary_label{
	display:none;
}

.wp-editor-wrap *,
.wp-editor-wrap *:after,
.wp-editor-wrap *:before{
	-webkit-box-sizing:content-box;
	-moz-box-sizing:content-box;
	box-sizing:content-box;
}

.with_frm_style .frm_grid,
.with_frm_style .frm_grid_first,
.with_frm_style .frm_grid_odd{
	clear:both;
	margin-bottom:0 !important;
	padding:5px;
	border-width:1px;
	border-style:solid;
	border-color:#0f122e;
	border-left:none;
	border-right:none;
}

.with_frm_style .frm_grid,
.with_frm_style .frm_grid_odd{
	border-top:none;
}

.frm_grid .frm_error,
.frm_grid_first .frm_error,
.frm_grid_odd .frm_error{
	display:none;
}

.frm_grid:after,
.frm_grid_first:after,
.frm_grid_odd:after{
	visibility:hidden;
	display:block;
	font-size:0;
	content:" ";
	clear:both;
	height:0;
}

.frm_grid_first{
	margin-top:20px;
}

.frm_grid_first,
.frm_grid_odd{
	background-color:#ffffff;
}

.frm_grid{
	background-color:#ffffff;
}

.frm_grid .frm_primary_label,
.frm_grid_first .frm_primary_label,
.frm_grid_odd .frm_primary_label,
.frm_grid .frm_radio,
.frm_grid_first .frm_radio,
.frm_grid_odd .frm_radio,
.frm_grid .frm_checkbox,
.frm_grid_first .frm_checkbox,
.frm_grid_odd .frm_checkbox{
	float:left !important;
	display:block;
	margin-top:0;
	margin-left:0 !important;
}

.frm_grid_first .frm_radio label,
.frm_grid .frm_radio label,
.frm_grid_odd .frm_radio label,
.frm_grid_first .frm_checkbox label,
.frm_grid .frm_checkbox label,
.frm_grid_odd .frm_checkbox label{
	visibility:hidden;
	white-space:nowrap;
	text-align:left;
}

.frm_grid_first .frm_radio label input,
.frm_grid .frm_radio label input,
.frm_grid_odd .frm_radio label input,
.frm_grid_first .frm_checkbox label input,
.frm_grid .frm_checkbox label input,
.frm_grid_odd .frm_checkbox label input{
	visibility:visible;
	margin:2px 0 0;
	float:right;
}

.frm_grid .frm_radio,
.frm_grid_first .frm_radio,
.frm_grid_odd .frm_radio,
.frm_grid .frm_checkbox,
.frm_grid_first .frm_checkbox,
.frm_grid_odd .frm_checkbox{
	display:inline;
}

.frm_grid_2 .frm_radio,
.frm_grid_2 .frm_checkbox,
.frm_grid_2 .frm_primary_label{
	width:48% !important;
}

.frm_grid_2 .frm_radio,
.frm_grid_2 .frm_checkbox{
	margin-right:4%;
}

.frm_grid_3 .frm_radio,
.frm_grid_3 .frm_checkbox,
.frm_grid_3 .frm_primary_label{
	width:30% !important;
}

.frm_grid_3 .frm_radio,
.frm_grid_3 .frm_checkbox{
	margin-right:3%;
}

.frm_grid_4 .frm_radio,
.frm_grid_4 .frm_checkbox{
	width:20% !important;
}

.frm_grid_4 .frm_primary_label{
	width:28% !important;
}

.frm_grid_4 .frm_radio,
.frm_grid_4 .frm_checkbox{
	margin-right:4%;
}

.frm_grid_5 .frm_primary_label,
.frm_grid_7 .frm_primary_label{
	width:24% !important;
}

.frm_grid_5 .frm_radio,
.frm_grid_5 .frm_checkbox{
	width:17% !important;
	margin-right:2%;
}

.frm_grid_6 .frm_primary_label{
	width:25% !important;
}

.frm_grid_6 .frm_radio,
.frm_grid_6 .frm_checkbox{
	width:14% !important;
	margin-right:1%;
}

.frm_grid_7 .frm_primary_label{
	width:22% !important;
}

.frm_grid_7 .frm_radio,
.frm_grid_7 .frm_checkbox{
	width:12% !important;
	margin-right:1%;
}

.frm_grid_8 .frm_primary_label{
	width:23% !important;
}

.frm_grid_8 .frm_radio,
.frm_grid_8 .frm_checkbox{
	width:10% !important;
	margin-right:1%;
}

.frm_grid_9 .frm_primary_label{
	width:20% !important;
}

.frm_grid_9 .frm_radio,
.frm_grid_9 .frm_checkbox{
	width:9% !important;
	margin-right:1%;
}

.frm_grid_10 .frm_primary_label{
	width:19% !important;
}

.frm_grid_10 .frm_radio,
.frm_grid_10 .frm_checkbox{
	width:8% !important;
	margin-right:1%;
}

.frm_form_field.frm_inline_container .frm_opt_container,
.frm_form_field.frm_right_container .frm_opt_container,
.frm_form_field.frm_left_container .frm_opt_container{
	padding-top:4px;
}

.with_frm_style .frm_inline_container.frm_grid_first .frm_primary_label,
.with_frm_style .frm_inline_container.frm_grid .frm_primary_label,
.with_frm_style .frm_inline_container.frm_grid_odd .frm_primary_label,
.with_frm_style .frm_inline_container.frm_grid_first .frm_opt_container,
.with_frm_style .frm_inline_container.frm_grid .frm_opt_container,
.with_frm_style .frm_inline_container.frm_grid_odd .frm_opt_container{
	margin-right:0;
}

.frm_form_field.frm_two_col .frm_opt_container,
.frm_form_field.frm_three_col .frm_opt_container,
.frm_form_field.frm_four_col .frm_opt_container{
	display: grid;
	grid-template-columns: repeat(2, 1fr);
	grid-auto-rows: max-content;
	grid-gap: 0 2.5%;
}

.frm_form_field.frm_three_col .frm_opt_container{
	grid-template-columns: repeat(3, 1fr);
}

.frm_form_field.frm_four_col .frm_opt_container{
	grid-template-columns: repeat(4, 1fr);
}

.frm_form_field.frm_two_col .frm_radio,
.frm_form_field.frm_two_col .frm_checkbox,
.frm_form_field.frm_three_col .frm_radio,
.frm_form_field.frm_three_col .frm_checkbox,
.frm_form_field.frm_four_col .frm_radio,
.frm_form_field.frm_four_col .frm_checkbox{
	grid-column-end: span 1;
}

.frm_form_field .frm_checkbox,
.frm_form_field .frm_checkbox + .frm_checkbox,
.frm_form_field .frm_radio,
.frm_form_field .frm_radio + .frm_radio{
	margin-top: 0;
	margin-bottom: 0;
}

.frm_form_field.frm_scroll_box .frm_opt_container{
	height:100px;
	overflow:auto;
}

.frm_html_container.frm_scroll_box,
.frm_form_field.frm_html_scroll_box{
	height:100px;
	overflow:auto;
	background-color:#ffffff;
	border-color:#0f122e;
	border-width:1px;
	border-style:solid;
	-moz-border-radius:100px;
	-webkit-border-radius:100px;
	border-radius:100px;
	width:100%;
	max-width:100%;
	font-size:14px;
	padding:6px 25px;
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	box-sizing:border-box;
	outline:none;
	font-weight:normal;
	box-shadow:0 1px 1px rgba(0, 0, 0, 0.075) inset;
}

.frm_form_field.frm_total input,
.frm_form_field.frm_total textarea{
	opacity:1;
	background-color:transparent !important;
	border:none !important;
	font-weight:bold;
	-moz-box-shadow:none;
	-webkit-box-shadow:none;
	width:auto !important;
	box-shadow:none !important;
	display:inline;
	-moz-appearance:textfield;
	padding:0;
}

.frm_form_field.frm_total input::-webkit-outer-spin-button,
.frm_form_field.frm_total input::-webkit-inner-spin-button {
	-webkit-appearance: none;
}

.frm_form_field.frm_total input:focus,
.frm_form_field.frm_total textarea:focus{
	background-color:transparent;
	border:none;
	-moz-box-shadow:none;
	-webkit-box-shadow:none;
	box-shadow:none;
}

.frm_form_field.frm_label_justify .frm_primary_label{
	text-align:justify !important;
}

.frm_form_field.frm_capitalize input,
.frm_form_field.frm_capitalize select,
.frm_form_field.frm_capitalize .frm_opt_container label{
	text-transform:capitalize;
}

.frm_clearfix:after{
	content:".";
	display:block;
	clear:both;
	visibility:hidden;
	line-height:0;
	height:0;
}

.frm_clearfix{
	display:block;
}

/* Fonts */
@font-face {
	font-family: 's11-fp';
	src: url('../fonts/s11-fpbea6.ttf?v=7') format('truetype'),
		url('../fonts/s11-fpbea6.woff?v=7') format('woff'),
		url('../fonts/s11-fpbea6.svg?v=7#s11-fp') format('svg');
	font-weight: normal;
	font-style: normal;
}

.frmfont,
.frm_icon_font,
.frm_dashicon_font{
	text-decoration:none;
	text-shadow: none;
	font-weight:normal;
	display:inline-block;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	text-rendering: auto;
	line-height: 1;
	-moz-transition: color .1s ease-in-out, opacity .1s ease-in-out;
	-webkit-transition: color .1s ease-in-out, opacity .1s ease-in-out;
	transition: color .1s ease-in-out, opacity .1s ease-in-out;
	font-size: 18px;
}

i.frmfont,
i.frm_icon_font{
	font-style:normal;
	font-variant: normal;
	speak: none;
}

.frmfont:before,
select.frmfont,
.frm_icon_font:before,
select.frm_icon_font{
	font-family: 's11-fp' !important;
	text-align:center;
}

.frmfont,
a.frmfont,
.frmfont:hover,
a.frmfont:hover
.frm_icon_font,
a.frm_icon_font,
.frm_icon_font:hover,
a.frm_icon_font:hover{
	text-decoration:none !important;
	box-shadow:none;
}

.frmfont:focus,
.frm_icon_font:focus,
.frm_dashicon_font:focus{
	box-shadow:none;
	-webkit-box-shadow:none;
}

.frmfont:active,
.frm_icon_font:active{
	outline:none;
}

.frm_trigger .frm_icon_font{
	padding:0 5px;
}

.frm_logo_icon:before {
	content: "\e601";
}
.frm_required_icon:before {
	content: "\e612";
}
.frm_delete_icon:before {
	content: "\e610" !important;
}
.frm_delete_solid_icon:before {
	content: "\e900";
}
.frm_move_icon:before {
	content: "\e61a";
}
.frm_drag_icon:before {
	content: "\e93b";
}
.frm_clear_icon:before {
	content: "\e60a";
}
.frm_noclear_icon:before {
	content: "\e60b";
}
.frm_duplicate_icon:before {
	content: "\e61b";
}
.frm_copy_icon:before {
	content: "\f0c5";
}
.frm_clone_solid_icon:before {
	content: "\f24e";
}
.frm_clone_icon:before {
	content: "\f24d";
}
.frm_tooltip_icon:before {
	content: "\e611";
}
.frm_tooltip_solid_icon:before {
	content: "\e907";
}
.frm_forbid_icon:before {
	content: "\e636";
}
.frm_checkmark_icon:before {
	content: "\e90a";
}
.frm_check_icon:before {
	content: "\e605";
}
.frm_check1_icon:before {
	content: "\e606";
}
.frm_plus_icon:before {
	content: "\e62f";
}
.frm_plus1_icon:before {
	content: "\e602";
}
.frm_plus2_icon:before {
	content: "\e603";
}
.frm_plus3_icon:before {
	content: "\e632";
}
.frm_plus4_icon:before {
	content: "\e60f";
}
.frm_minus_icon:before {
	content: "\e62e";
}
.frm_minus1_icon:before {
	content: "\e600";
}
.frm_minus2_icon:before {
	content: "\e604";
}
.frm_minus3_icon:before {
	content: "\e633";
}
.frm_minus4_icon:before {
	content: "\e613";
}
.frm_cancel_icon:before {
	content: "\e607";
}
.frm_cancel1_icon:before {
	content: "\e608";
}
.frm_close_icon:before {
	content: "\e928";
}
.frm_report_problem_solid_icon:before {
	content: "\e914";
}
.frm_report_problem_icon:before {
	content: "\e915";
}
.frm_arrowup_icon:before {
	content: "\e60d";
}
.frm_arrowup1_icon:before {
	content: "\e60e";
}
.frm_arrowup2_icon:before {
	content: "\e630";
}
.frm_arrowup3_icon:before {
	content: "\e62b";
}
.frm_arrowup4_icon:before {
	content: "\e62c";
}
.frm_arrowup5_icon:before {
	content: "\e635";
}
.frm_arrowup5_solid_icon:before {
	content: "\e9d";
}
.frm_arrowup7_icon:before {
	content: "\e908";
}
.frm_arrowup6_icon:before {
	content: "\e62d";
}
.frm_arrowdown_icon:before {
	content: "\e609";
}
.frm_arrowdown1_icon:before {
	content: "\e60c";
}
.frm_arrowdown2_icon:before {
	content: "\e631";
}
.frm_arrowdown3_icon:before {
	content: "\e628";
}
.frm_arrowdown4_icon:before {
	content: "\e629";
}
.frm_arrowdown5_icon:before {
	content: "\e634";
}
.frm_arrowdown5_solid_icon:before {
	content: "\e905";
}
.frm_arrowdown7_icon:before {
	content: "\e90b";
}
.frm_arrowdown6_icon:before {
	content: "\e62a";
}
.frm_arrow_left_icon:before {
	content: "\e912";
}
.frm_arrow_right_icon:before {
	content: "\e913";
}
.frm_filter_icon:before {
	content: "\e90c";
}
.frm_download_icon:before {
	content: "\e615";
}
.frm_upload2_icon:before {
	content: "\f093";
}
.frm_upload_icon:before {
	content: "\e616";
}
.frm_download2_icon:before {
	content: "\f019";
}
.frm_hard_drive_icon:before {
	content: "\e916";
}
.frm_pencil_solid_icon:before {
	content: "\e901";
}
.frm_pencil_icon:before {
	content: "\e61d";
}
.frm_signature_icon:before {
	content: "\e919";
}
.frm_user_icon:before {
	content: "\e7ff";
}
.frm_register_icon:before {
	content: "\e637";
}
.frm_account_circle_solid_icon:before {
	content: "\e853";
}
.frm_account_circle_icon:before {
	content: "\e921";
}
.frm_address_card_icon:before {
	content: "\e996";
}
.frm_paragraph_icon:before {
	content: "\f1dd";
}
.frm_checkbox_unchecked_icon:before {
	content: "\e91e";
}
.frm_checkbox_icon:before {
	content: "\e922";
}
.frm_checkbox_solid_icon:before {
	content: "\e91f";
}
.frm_dropdown_icon:before {
	content: "\e909";
}
.frm_caret_square_down_icon:before {
	content: "\f150";
}
.frm_check_square_icon:before {
	content: "\f14a";
}
.frm_radio_unchecked_icon:before {
	content: "\e971";
}
.frm_radio_checked_icon:before {
	content: "\ea54";
}
.frm_scrubber_icon:before {
	content: "\f2f8";
}
.frm_location_solid_icon:before {
	content: "\e955";
}
.frm_location_icon:before {
	content: "\e947";
}
.frm_toggle_on_icon:before {
	content: "\f205";
}
.frm_toggle_off_icon:before {
	content: "\f204";
}
.frm_shield_check_icon:before {
	content: "\f2f7";
}
.frm_shield_check_solid_icon:before {
	content: "\e97d";
}
.frm_clock_icon:before {
	content: "\e929";
}
.frm_clock_solid_icon:before {
	content: "\e985";
}
.frm_link_icon:before {
	content: "\f0c1";
}
.frm_email_icon:before {
	content: "\e626";
}
.frm_email_solid_icon:before {
	content: "\f0e0";
}
.frm_mail_bulk_icon:before {
	content: "\e95c";
}
.frm_phone_icon:before {
	content: "\e942";
}
.frm_calendar_icon:before {
	content: "\f073";
}
.frm_code_icon:before {
	content: "\e90d";
}
.frm_tag_icon:before {
	content: "\e98b";
}
.frm_tag_solid_icon:before {
	content: "\e989";
}
.frm_price_tags_icon:before {
	content: "\e936";
}
.frm_search_icon:before {
	content: "\e978";
}
.frm_sitemap_icon:before {
	content: "\f0e8";
}
.frm_file_icon:before {
	content: "\f15b";
}
.frm_file_text_solid_icon:before {
	content: "\f15c";
}
.frm_file_text_icon:before {
	content: "\e923";
}
.frm-option-icon:before, /* Reverse Compatibility */
.frm_option_icon:before {
	content: "\e904";
}
.frm_option_solid_icon:before {
	content: "\e906";
}
.frm_more_horiz_icon:before {
	content: "\e5d3";
}
.frm_more_vert_icon:before {
	content: "\e5d4";
}
.frm_more_horiz_solid_icon {
	font-size: 28px !important;
	font-weight: bold;
	line-height: 18px;
}
.frm_more_horiz_solid_icon:before {
	content: "\00B7\00B7\00B7";
}
.frm_more_vert_solid_icon:before {
	content: "\f142";
}
.frm_calculator_icon:before {
	content: "\f1ec";
}
.frm_key_icon:before {
	content: "\f084";
}
.frm_keyalt_solid_icon:before {
	content: "\e986";
}
.frm_keyalt_icon:before {
	content: "\e987";
}
.frm_keyboard_icon:before {
	content: "\e924";
}
.frm_eye_icon:before {
	content: "\f06e";
}
.frm_eye_solid_icon:before {
	content: "\e945";
}
.frm_eye_slash_icon:before {
	content: "\f070";
}
.frm_eye_slash_solid_icon:before {
	content: "\e949";
}
.frm_page_break_icon:before {
	content: "\e8e9";
}
.frm_view_day_icon:before {
	content: "\e8ed";
}
.frm_attach_file_icon:before {
	content: "\e226";
}
.frm_printer_icon:before {
	content: "\e926";
}
.frm_header_icon:before {
	content: "\f1dc";
}
.frm_h1_icon:before {
	content: "\e94c";
}
.frm_repeat_icon:before {
	content: "\f363";
}
.frm_repeater_icon:before {
	content: "\e974";
}
.frm_hashtag_icon:before {
	content: "\e292";
}
.frm_save_icon:before {
	content: "\e927";
}
.frm_sliders_icon:before {
	content: "\f1de";
}
.frm_code_commit_icon:before {
	content: "\f386";
}
.frm_star_icon:before {
	content: "\e9d7";
}
.frm_star_full_icon:before {
	content: "\e9d9";
}
.frm_star_half_icon:before {
	content: "\e9d8";
}
.frm_linear_scale_icon:before {
	content: "\e260";
}
.frm_pie_chart_icon:before {
	content: "\e99a";
}
.frm_stats_bars_icon:before {
	content: "\e99c";
}
.frm_sms_icon:before {
	content: "\e61c";
}
.frm_highrise_icon:before {
	content: "\e617";
}
.frm_mailchimp_icon:before {
	content: "\e622";
}
.frm_feed_icon:before {
	content: "\e624";
}
.frm_align_right_icon:before {
	content: "\e90f";
}
.frm_align_left_icon:before {
	content: "\e910";
}
.frm_button_icon:before {
	content: "\e911";
}
.frm_browser_icon:before {
	content: "\e925";
}
.frm_cloud_download_solid_icon:before {
	content: "\e92a";
}
.frm_cloud_download_icon:before {
	content: "\e92b";
}
.frm_cloud_upload_solid_icon:before {
	content: "\e92c";
}
.frm_cloud_upload_icon:before {
	content: "\e92d";
}
.frm_cloud_solid_icon:before {
	content: "\e92e";
}
.frm_cloud_icon:before {
	content: "\e92f";
}
.frm_shuffle_icon:before {
	content: "\e917";
}
.frm_swap_icon:before {
	content: "\e918";
}
.frm_dropper_solid_icon:before {
	content: "\e93c";
}
.frm_tint_icon:before {
	content: "\e93e";
}
.frm_pallet_solid_icon:before {
	content: "\e96c";
}
.frm_pallet_icon:before {
	content: "\e96d";
}
.frm_fingerprint_icon:before {
	content: "\e94a";
}
.frm_ghost_icon:before {
	content: "\e94b";
}
.frm_heart_solid_icon:before {
	content: "\e94d";
}
.frm_heart_icon:before {
	content: "\e94e";
}
.frm_history_icon:before {
	content: "\e94f";
}
.frm_import_icon:before {
	content: "\e91a";
}
.frm_export_icon:before {
	content: "\e91b";
}
.frm_label_solid_icon:before {
	content: "\e952";
}
.frm_label_icon:before {
	content: "\e953";
}
.frm_lock_open_icon:before {
	content: "\e957";
}
.frm_lock_solid_icon:before {
	content: "\e958";
}
.frm_lock_icon:before {
	content: "\e959";
}
.frm_magic_wand_icon:before {
	content: "\e997";
}
.frm_dollar_sign_icon:before {
	content: "\e91c";
}
.frm_percent_icon:before {
	content: "\e939";
}
.frm_notification_solid_icon:before {
	content: "\e964";
}
.frm_notification_icon:before {
	content: "\e965";
}
.frm_external_link_icon:before {
	content: "\e966";
}
.frm_pageview_solid_icon:before {
	content: "\e96a";
}
.frm_pageview_icon:before {
	content: "\e96b";
}
.frm_settings_solid_icon:before {
	content: "\e979";
}
.frm_settings_icon:before {
	content: "\e97a";
}
.frm_stamp_icon:before {
	content: "\e980";
}
.frm_support_icon:before {
	content: "\f1cd";
}
.frm_text_solid_icon:before {
	content: "\e98c";
}
.frm_text_icon:before {
	content: "\e98d";
}
.frm_text2_icon:before {
	content: "\f031";
}
.frm_text3_icon:before {
	content: "\e98e";
}
.frm_unfold_less_icon:before {
	content: "\e993";
}
.frm_unfold_more_icon:before {
	content: "\e994";
}
.frm_work_solid_icon:before {
	content: "\e999";
}
.frm_work_icon:before {
	content: "\e99e";
}
.frm_white_label_icon:before {
	content: "\e91d" !important;
}
.frm_zoom_out_icon:before {
	content: "\e99f";
}
.frm_maximize_icon:before {
	content: "\e920";
}
.frm_minimize_icon:before {
	content: "\e93a";
}
.frm_authorize_icon:before {
	content: "\e903";
}
.frm_icon_font.frm_activecampaign_icon {
	background-image: none;
}
.frm_activecampaign_icon:before {
	content: "\e930";
}
.frm_aweber_icon:before {
	content: "\e627";
}
.frm_campaignmonitor_icon:before {
	content: "\e946";
}
.frm_constant_contact_icon:before {
	content: "\e931";
}
.frm_getresponse_icon:before {
	content: "\e932";
}
.frm_googlesheets_icon:before {
	content: "\e944";
}
.frm_building_icon:before {
	content: "\e93f";
}
.frm_hubspot_icon:before {
	content: "\e933";
}
.frm_icontact_icon:before {
	content: "\e940";
}
.frm_icon_font.frm_mailpoet_icon:before {
	content: "\e934";
}
.frm_paypal_icon:before {
	content: "\e61f";
}
.frm_sendinblue_icon:before {
	content: "\e943";
}
.frm_sendy_icon:before {
	content: "\e941";
}
.frm_salesforce_icon:before {
	content: "\e935";
}
.frm_salesforcealt_icon:before {
	content: "\e937";
}
.frm_stripe_icon:before {
	content: "\e902";
}
.frm_stripealt_icon:before {
	content: "\e93d";
}
.frm_twilio_icon:before {
	content: "\e620";
}
.frm_woocommerce_icon:before {
	content: "\e90e";
}
.frm_wordpress_icon:before {
	content: "\f19a";
}
.frm_credit_card_icon:before {
	content: "\e938";
}
.frm_credit-card-alt_icon:before, /* Reverse Compatibility */
.frm_credit_card_alt_icon:before {
	content: "\f283";
}
.frm_cc_amex_icon:before {
	content: "\f1f3";
}
.frm_cc_discover_icon:before {
	content: "\f1f2";
}
.frm_cc_mastercard_icon:before {
	content: "\f1f1";
}
.frm_cc_visa_icon:before {
	content: "\f1f0";
}
.frm_cc_paypal_icon:before {
	content: "\f1f4";
}
.frm_cc_stripe_icon:before {
	content: "\f1f5";
}
.js .frm_logic_form:not(.frm_no_hide) {
    display:none;
}

.with_frm_style .frm_conf_field.frm_half label.frm_conf_label {
    overflow: hidden;
    white-space: nowrap;
}

.with_frm_style .frm_time_wrap{
	white-space:nowrap;
}

.with_frm_style select.frm_time_select{
	white-space:pre;
	display:inline;
}

.with_frm_style .frm_repeat_sec{
    margin-bottom:20px;
    margin-top:20px;
	padding-bottom:15px;
}

.with_frm_style .frm_repeat_sec:last-child{
	border-bottom:none;
	padding-bottom:0;
}

.with_frm_style .frm_repeat_inline{
	clear:both;
}

.frm_invisible_section .frm_form_field,
.frm_invisible_section{
	display:none !important;
	visibility:hidden !important;
	height:0;
	margin:0;
}

.frm_form_field .frm_repeat_sec .frm_add_form_row,
.frm_section_heading div.frm_repeat_sec:last-child .frm_add_form_row.frm_hide_add_button,
.frm_form_field div.frm_repeat_grid .frm_add_form_row.frm_hide_add_button,
.frm_form_field div.frm_repeat_inline .frm_add_form_row.frm_hide_add_button {
	-moz-transition: opacity .15s ease-in-out;
	-webkit-transition: opacity .15s ease-in-out;
	transition: opacity .15s ease-in-out;
	pointer-events: none;
}

.frm_form_field .frm_repeat_sec .frm_add_form_row,
.frm_section_heading div.frm_repeat_sec:last-child .frm_add_form_row.frm_hide_add_button {
	display: none;
}

.frm_form_field div.frm_repeat_grid .frm_add_form_row.frm_hide_add_button,
.frm_form_field div.frm_repeat_inline .frm_add_form_row.frm_hide_add_button {
	visibility: hidden;
}

.frm_form_field div.frm_repeat_grid .frm_add_form_row,
.frm_form_field div.frm_repeat_inline .frm_add_form_row,
.frm_section_heading div.frm_repeat_sec:last-child .frm_add_form_row {
	display: inline-block;
	visibility: visible;
	pointer-events: auto;
}

.frm_add_form_row.frm_button.frm_hidden:last-child, .frm_add_form_row.frm_icon_font.frm_hidden:last-child {
	display: inline-block;
}

.frm_form_fields .frm_section_heading.frm_hidden {
	display: none;
}

.frm_repeat_inline .frm_repeat_buttons a.frm_icon_font{
	vertical-align: sub;
}

.frm_repeat_inline .frm_repeat_buttons a.frm_icon_font:before{
    vertical-align: text-top;
}

.frm_repeat_grid .frm_button,
.frm_repeat_inline .frm_button,
.frm_repeat_sec .frm_button{
	display: inline-block;
	line-height:1;
}

.frm_repeat_sec .frm_button .frm_icon_font:before,
.frm_repeat_grid .frm_button .frm_icon_font:before,
.frm_repeat_inline .frm_button .frm_icon_font:before{
    line-height:1;
}

.frm_form_field .frm_repeat_grid ~ .frm_repeat_grid .frm_form_field .frm_primary_label{
    display:none !important;
}

/* Datepicker */

#ui-datepicker-div{
    display:none;
    z-index:999999 !important;
}


.ui-datepicker .ui-datepicker-title select.ui-datepicker-month,
.ui-datepicker .ui-datepicker-title select.ui-datepicker-year {
    width: 33%;
	background-color:#fff;
	float:none;
}

.ui-datepicker select.ui-datepicker-month{
	margin-right: 3px;
}

.ui-datepicker-month, .ui-datepicker-year{
	max-width:100%;
	max-height:2em;
	padding:6px 10px;
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	box-sizing:border-box;
}

.ui-datepicker .ui-widget-header,
.ui-datepicker .ui-datepicker-header {
    background: #4199FD !important;
	color: #ffffff !important;
}

.ui-datepicker td.ui-datepicker-today{
	background: rgba(15,103,203,0.15) !important;
}

.ui-datepicker td.ui-datepicker-current-day,
.ui-datepicker td .ui-state-hover,
.ui-datepicker thead {
    background: #0f67cb !important;
	color: #ffffff !important;
}

.ui-datepicker td.ui-datepicker-current-day .ui-state-default{
	color: #ffffff !important;
}

/* Graphs */
.google-visualization-tooltip-item-list,
.google-visualization-tooltip-item-list .google-visualization-tooltip-item:first-child {
	margin: 1em 0 !important;
}

.google-visualization-tooltip-item {
	list-style-type: none !important;
	margin: 0.65em 0 !important;
}

/* Radio Scale */

.with_frm_style .frm_scale{
	margin-right:15px;
	text-align:center;
	float:left;
}

.with_frm_style .frm_scale input{
	display:block;
	margin:0;
}

/* Star ratings */

.frm-star-group input {
	display: none !important;
}

.frm-star-group .star-rating,
.frm-star-group input + label {
	float:left;
	width:25px;
	height:25px;
	font-size:25px;
	line-height:1;
	cursor:pointer;
	display:block;
	background:transparent;
	overflow:hidden !important;
	clear:none;
	font-style:normal;
	margin-right:15px;
}

.frm-star-group input + label:before,
.frm-star-group .star-rating:before{
	font-family:'s11-fp';
	content:'\e9d7';
	color:#F0AD4E;
	display: inline-block;
	vertical-align: top;
}

.frm-star-group input[type=radio]:checked + label:before,
.frm-star-group:not(.frm-star-hovered) input[type=radio]:checked + label:before{
	color:#F0AD4E;
}

.frm-star-group:not(.frm-star-hovered) input[type=radio]:checked + label:before,
.frm-star-group input + label:hover:before,
.frm-star-group:hover input + label:hover:before,
.frm-star-group .star-rating-on:before,
.frm-star-group .star-rating-hover:before{
	content:'\e9d9';
	color:#F0AD4E;
}

.frm-star-group .frm_half_star:before{
	content:'\e9d8';
}

.frm-star-group .star-rating-readonly{
	cursor:default !important;
}

/* Other input */
.with_frm_style .frm_other_input.frm_other_full{
	margin-top:10px;
}

.frm_left_container .frm_other_input{
	grid-column:2;
}

.frm_inline_container.frm_other_container .frm_other_input,
.frm_left_container.frm_other_container .frm_other_input{
	margin-left:5px;
}

.frm_right_container.frm_other_container .frm_other_input{
	margin-right:5px;
}

.frm_inline_container.frm_other_container select ~ .frm_other_input,
.frm_right_container.frm_other_container select ~ .frm_other_input,
.frm_left_container.frm_other_container select ~ .frm_other_input{
	margin:0;
}

/* Pagination */
.frm_pagination_cont ul.frm_pagination{
    display:inline-block;
    list-style:none;
    margin-left:0 !important;
}

.frm_pagination_cont ul.frm_pagination > li{
    display:inline;
    list-style:none;
    margin:2px;
    background-image:none;
}

ul.frm_pagination > li.active a{
	text-decoration:none;
}

.frm_pagination_cont ul.frm_pagination > li:first-child{
    margin-left:0;
}

.archive-pagination.frm_pagination_cont ul.frm_pagination > li{
    margin:0;
}

/* Calendar Styling */
.frmcal{
    padding-top:30px;
}

.frmcal-title{
    font-size:116%;
}

.frmcal table.frmcal-calendar{
    border-collapse:collapse;
    margin-top:20px;
    color:#0f122e;
}

.frmcal table.frmcal-calendar,
.frmcal table.frmcal-calendar tbody tr td{
    border:1px solid #0f122e;
}

.frmcal table.frmcal-calendar,
.frmcal,
.frmcal-header{
    width:100%;
}

.frmcal-header{
    text-align:center;
}

.frmcal-prev{
    margin-right:10px;
}

.frmcal-prev,
.frmcal-dropdown{
    float:left;
}

.frmcal-dropdown{
    margin-left:5px;
}

.frmcal-next{
    float:right;
}

.frmcal table.frmcal-calendar thead tr th{
    text-align:center;
    padding:2px 4px;
}

.frmcal table.frmcal-calendar tbody tr td{
    height:110px;
    width:14.28%;
    vertical-align:top;
    padding:0 !important;
    color:#0f122e;
    font-size:12px;
}

table.frmcal-calendar .frmcal_date{
    background-color:#ffffff;
    padding:0 5px;
    text-align:right;
    -moz-box-shadow:0 2px 5px #0f122e;
    -webkit-box-shadow:0 2px 5px #0f122e;
    box-shadow:0 2px 5px #0f122e;
}

table.frmcal-calendar .frmcal-today .frmcal_date{
    background-color:#ffffff;
    padding:0 5px;
    text-align:right;
    -moz-box-shadow:0 2px 5px #8338ec;
    -webkit-box-shadow:0 2px 5px #8338ec;
    box-shadow:0 2px 5px #8338ec;
}

.frmcal_day_name,
.frmcal_num{
    display:inline;
}

.frmcal-content{
    padding:2px 4px;
}
/* End Calendar Styling */

/* Start Toggle Styling */
.frm_switch_opt {
	padding:0 8px 0 0;
	white-space:normal;
	display:inline;
	vertical-align: middle;
}

.frm_on_label{
	color: #3177c7;
	padding:0 0 0 8px;
}

.frm_switch {
	position: relative;
	display: inline-block;
	width: 40px;
	height: 25px;
	vertical-align: middle;
}

.frm_switch input {
	display:none !important;
}

.frm_slider {
	position: absolute;
	cursor: pointer;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	background-color: #ccc;
	transition: .4s;
	border-radius: 30px;
}

.frm_slider:before {
	border-radius: 50%;
	position: absolute;
	content: "";
	height: 23px;
	width: 23px;
	left: 1px;
	bottom: 1px;
	background-color: white;
	transition: .4s;
	box-shadow:0 2px 6px rgba(41, 58, 82, 0.31);
}

input:checked + .frm_slider {
	background-color: #3177c7;
}

input:focus + .frm_slider {
	box-shadow: 0 0 1px #3177c7;
}

input:checked + .frm_slider:before {
	transform: translateX(15px);
}

/* Range slider */

.with_frm_style .frm_range_unit,
.with_frm_style .frm_range_value{
	display:inline-block;
	padding-left: 2px;
	padding-right: 2px;
}

.with_frm_style input[type=range] {
	-webkit-appearance: none;
	box-shadow:none !important;
	border:none !important;
	cursor: pointer;
	padding:0 ;
	background:transparent !important;
	display: block;
	width: 100%;
	margin: 7px 0 15px;
	font-size:14px;
}

.with_frm_style input[type=range]:active,
.with_frm_style input[type=range]:focus {
	outline: none;
	box-shadow:none !important;
	background:transparent !important;
}

.with_frm_style .frm_range_container{
	text-align:center;
}

.with_frm_style input[type=range]::-webkit-slider-runnable-track {
	-webkit-appearance: none;
	border-radius: 9px;
	border: none;
	height: 5px;
	background-color: #ccc;}
.with_frm_style input[type=range]::-moz-range-track {
	border-radius: 9px;
	border: none;
	height: 5px;
	background-color: #ccc;	border-color: transparent;
	border-width: 39px 0;
	color: transparent;
}

.with_frm_style input[type=range]::-moz-range-progress {
	border-radius: 9px;
	border: none;
	height: 5px;
	background-color: #ccc;	background-color: #3177c7;
}

.with_frm_style input[type=range]::-ms-fill-lower {
	border-radius: 9px;
	border: none;
	height: 5px;
	background-color: #ccc;	background-color: #3177c7;
}
.with_frm_style input[type=range]::-ms-fill-upper {
	border-radius: 9px;
	border: none;
	height: 5px;
	background-color: #ccc;}

.with_frm_style input[type=range]::-webkit-slider-thumb {
	-webkit-appearance: none;
	-webkit-border-radius: 20px;
	height: 24px;
	width: 24px;border-radius: 24px;
	border: 1px solid #3177c7;
	color:#ffffff;
	background: #fff;
	cursor: pointer;	margin-top: -10px;
	box-shadow:0 2px 6px rgba(41, 58, 82, 0.31);
}

.with_frm_style input[type=range]::-moz-range-thumb {
	height: 24px;
	width: 24px;border-radius: 24px;
	border: 1px solid #3177c7;
	color:#ffffff;
	background: #fff;
	cursor: pointer;	-moz-border-radius: 20px;
}

.with_frm_style input[type=range]::-ms-thumb {
	height: 24px;
	width: 24px;border-radius: 24px;
	border: 1px solid #3177c7;
	color:#ffffff;
	background: #fff;
	cursor: pointer;}

/**
 * Password strength meter CSS
 */

@media screen and (max-width: 768px) {
    .frm-pass-req, .frm-pass-verified {
        width: 50% !important;
        white-space: nowrap;
    }
}

.frm-pass-req, .frm-pass-verified {
    float: left;
    width: 20%;
    line-height: 20px;
    font-size: 12px;
    padding-top: 4px;
    min-width: 175px;
}

.frm-pass-req:before, .frm-pass-verified:before {
    padding-right: 4px;
    font-size: 12px !important;
    vertical-align: middle !important;
}

span.frm-pass-verified::before {
    content: '\e606';
}

span.frm-pass-req::before {
    content: '\e608';
}

div.frm-password-strength {
    width: 100%;
    float: left;
}

div.frm_repeat_grid:after, div.frm_repeat_inline:after, div.frm_repeat_sec:after {
    content: '';
    display: table;
    clear: both;
}

.with_frm_style .frm-summary-page-wrapper {
	padding: 50px;
	margin: 25px 0 50px;
	border: 1px solid #0f122e;
	border-radius: 100px;
}

.with_frm_style .frm-summary-page-wrapper .frm-edit-page-btn {
	float: right;
	margin: 0;
	padding: 3px 10px;
	font-size: 13px;
}

.frm-summary-page-wrapper .frm-line-table th {
	width: 40%;
}

button .frm-icon {
	display: inline-block;
	color: inherit;
	width: 12px;
	height: 12px;
	fill: currentColor;
}

.frm-line-table {
	width: 100%;
	border-collapse: collapse;
	margin-top: 0.5em;
	font-size: 16px;
}

.frm-line-table tr {
	background-color: transparent;
	border-bottom: 1px solid rgba(15,18,46,0.6);
}

.frm-line-table td,
.frm-line-table th {
	border: 0;
	padding: 20px 15px;
	background-color: transparent;
	vertical-align: top;
	color: #0f122e;
}

.frm-line-table th {
	opacity: .7;
	font-size: 1.1em;
	font-weight: 500;
}

.frm-line-table h3 {
	font-size: 21px;
	font-weight: 500;
	margin: 0;
}

.frm_form_field .frm_total_formatted {
	display: inline-block;
	margin: 5px 0 0;
}
.with_frm_style .chosen-container{
    font-size:14px;
    position:relative;
    display:inline-block;
    zoom:1;
    vertical-align:middle;
	width:100% !important;
    -webkit-user-select:none;
    -moz-user-select:none;
    -ms-user-select:none;
    user-select:none;
}

.with_frm_style .chosen-container * {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

.with_frm_style .chosen-container .chosen-drop{
    background:#fff;
    border:1px solid #aaa;
    border-top:0;
    position:absolute;
    top:100%;
    z-index:1010;
    width:100%;
	clip: rect(0, 0, 0, 0);
	-webkit-clip-path: inset(100% 100%);
	clip-path: inset(100% 100%);
}

.with_frm_style .chosen-container.chosen-with-drop .chosen-drop{
	clip: auto;
	-webkit-clip-path: none;
	clip-path: none;
}

.with_frm_style .chosen-container a{
    cursor:pointer;
}

.with_frm_style .chosen-container .search-choice .group-name,
.with_frm_style .chosen-container .chosen-single .group-name {
	margin-right: 4px;
	overflow: hidden;
	white-space: nowrap;
	text-overflow: ellipsis;
	font-weight: normal;
	color: #999999;
}

.with_frm_style .chosen-container .search-choice .group-name:after,
.with_frm_style .chosen-container .chosen-single .group-name:after {
	content: ":";
	padding-left: 2px;
	vertical-align: top;
}

.with_frm_style .chosen-container-single .chosen-single{
    position:relative;
    display:block;
    overflow:hidden;
    padding:0 0 0 8px;
    height:25px;
    text-decoration:none;
    white-space:nowrap;
    line-height:24px;
}

.with_frm_style .chosen-container-single .chosen-default {
	color: #999;
}

.with_frm_style .chosen-container-single .chosen-single span{
    margin-right:26px;
    display:block;
    overflow:hidden;
    white-space:nowrap;
    text-overflow:ellipsis;
}

.with_frm_style .chosen-container-single .chosen-single-with-deselect span{
    margin-right:38px;
}

.with_frm_style .chosen-container-single .chosen-single abbr{
    display:block;
    position:absolute;
    right:26px;
    top:6px;
    width:12px;
    height:12px;
    font-size:1px;
    background:url('../wp-content/plugins/formidable-pro/images/chosen-sprite.png') -42px 1px no-repeat;
}

.with_frm_style .chosen-container-single .chosen-single abbr:hover{
    background-position:-42px -10px;
}

.with_frm_style .chosen-container-single.chosen-disabled .chosen-single abbr:hover{
    background-position:-42px -10px;
}

.with_frm_style .chosen-container-single .chosen-single div{
    position:absolute;
    right:0;
    top:0;
    display:block;
    height:100%;
    width:18px;
}

.with_frm_style .chosen-container-single .chosen-single div b{
    background:url('../wp-content/plugins/formidable-pro/images/chosen-sprite.png') no-repeat 0 2px;
    display:block;
    width:100%;
    height:100%;
}

.with_frm_style .chosen-container-single .chosen-search{
    padding:3px 4px;
    position:relative;
    margin:0;
    white-space:nowrap;
    z-index:1010;
}

.with_frm_style .chosen-container-single .chosen-search input[type="text"]{
    width:100% !important;
    max-width:100% !important;
    height:auto;
    background:url('../wp-content/plugins/formidable-pro/images/chosen-sprite.png') no-repeat 100% -20px;
    font-size:1em;
    font-family:sans-serif;
    line-height:normal;
    border-radius:0;
}

.with_frm_style .chosen-container-single .chosen-drop{
    margin-top:-1px;
    border-radius:0 0 4px 4px;
    background-clip:padding-box;
}

.with_frm_style .chosen-container-single.chosen-container-single-nosearch .chosen-search{
    position:absolute;
    clip: rect(0, 0, 0, 0);
	-webkit-clip-path: inset(100% 100%);
	clip-path: inset(100% 100%);
}

.with_frm_style .chosen-container .chosen-results{
    cursor:text;
    overflow-x:hidden;
    overflow-y:auto;
    position:relative;
    margin:0 4px 4px 0;
    padding:0 0 0 4px;
    max-height:240px;
    -webkit-overflow-scrolling:touch;
}

.with_frm_style .chosen-container .chosen-results li:before{
	background:none;
}

.with_frm_style .chosen-container .chosen-results li{
    display:none;
    margin:0;
    padding:5px 6px;
    list-style:none;
    line-height:15px;
    word-wrap:break-word;
    -webkit-touch-callout:none;
}

.with_frm_style .chosen-container .chosen-results li.active-result{
    display:list-item;
    cursor:pointer;
}

.with_frm_style .chosen-container .chosen-results li.disabled-result{
    display:list-item;
    color:#ccc;
    cursor:default;
}

.with_frm_style .chosen-container .chosen-results li.highlighted{
	background-color: #3875d7;
	background-image: -webkit-gradient(linear, left top, left bottom, color-stop(20%, #3875d7), color-stop(90%, #2a62bc));
	background-image: linear-gradient(#3875d7 20%, #2a62bc 90%);
	color: #fff;
}

.with_frm_style .chosen-container .chosen-results li.no-results{
    display:list-item;
    background:#f4f4f4;
}

.with_frm_style .chosen-container .chosen-results li.group-result{
    display:list-item;
    font-weight:bold;
    cursor:default;
}

.with_frm_style .chosen-container .chosen-results li.group-option{
    padding-left:15px;
}

.with_frm_style .chosen-container .chosen-results li em{
    font-style:normal;
    text-decoration:underline;
}

.with_frm_style .chosen-container-multi .chosen-choices{
    position:relative;
    overflow:hidden;
    margin:0;
    padding:0 5px;
    width:100%;
    height:auto;
    border: 1px solid #aaa;
    background-color: #fff;
    cursor:text;
}

.with_frm_style .chosen-container-multi .chosen-choices li{
    float:left;
    list-style:none;
}

.with_frm_style .chosen-container-multi .chosen-choices li.search-field{
    margin:0;
    padding:0;
    white-space:nowrap;
}

.with_frm_style .chosen-container-multi .chosen-choices li.search-field input[type="text"]{
    margin:1px 0;
    padding:0 !important;
    height:25px;
    outline:0;
    border:0 !important;
    background:transparent !important;
    box-shadow:none;
    color:#666;
    font-size:100%;
    font-family:sans-serif;
    line-height:normal;
    border-radius:0;
	width: 25px;
}

.with_frm_style .chosen-container-multi .chosen-choices li.search-choice{
    position:relative;
    margin:1px 5px 1px 0;
    padding:3px 20px 3px 5px;
    border:1px solid #aaa;
    max-width:100%;
    border-radius:3px;
    background-color:#eee;
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(20%, #f4f4f4), color-stop(50%, #f0f0f0), color-stop(52%, #e8e8e8), to(#eee));
    background-image: linear-gradient(#f4f4f4 20%, #f0f0f0 50%, #e8e8e8 52%, #eee 100%);
    background-size:100% 19px;
    background-repeat:repeat-x;
    background-clip:padding-box;
    box-shadow:0 0 2px white inset, 0 1px 0 rgba(0, 0, 0, 0.05);
    color:#333;
    line-height:13px;
    cursor:default;
}

.with_frm_style .chosen-container-multi .chosen-choices li.search-choice span {
	word-wrap: break-word;
}

.with_frm_style .chosen-container-multi .chosen-choices li.search-choice .search-choice-close{
    position:absolute;
    top:4px;
    right:3px;
    display:block;
    width:12px;
    height:12px;
    background:url('../wp-content/plugins/formidable-pro/images/chosen-sprite.png') -42px 1px no-repeat;
    font-size:1px;
}

.with_frm_style .chosen-container-multi .chosen-choices li.search-choice .search-choice-close:hover{
    background-position:-42px -10px;
}

.with_frm_style .chosen-container-multi .chosen-choices li.search-choice-disabled{
    padding-right:5px;
    border:1px solid #ccc;
    background-color:#e4e4e4;
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(20%, #f4f4f4), color-stop(50%, #f0f0f0), color-stop(52%, #e8e8e8), to(#eee));
    background-image: linear-gradient(#f4f4f4 20%, #f0f0f0 50%, #e8e8e8 52%, #eee 100%);
    color:#666;
}

.with_frm_style .chosen-container-multi .chosen-choices li.search-choice-focus{
    background:#d4d4d4;
}

.with_frm_style .chosen-container-multi .chosen-choices li.search-choice-focus .search-choice-close{
    background-position:-42px -10px;
}

.with_frm_style .chosen-container-multi .chosen-results{
    margin:0;
    padding:0;
}

.with_frm_style .chosen-container-multi .chosen-drop .result-selected{
    display:list-item;
    color:#ccc;
    cursor:default;
}

.with_frm_style .chosen-container-single.chosen-container-active .chosen-single{
    border:1px solid #5897fb;
    box-shadow:0 0 5px rgba(0, 0, 0, 0.3);
}

.with_frm_style .chosen-container-single.chosen-container-active.chosen-with-drop .chosen-single{
    border:1px solid #aaa;
    border-bottom-right-radius:0;
    border-bottom-left-radius:0;
    box-shadow:0 1px 0 #fff inset;
}

.with_frm_style .chosen-container-single.chosen-container-active.chosen-with-drop .chosen-single div{
    border-left:none;
    background:transparent;
}

.with_frm_style .chosen-container-single.chosen-container-active.chosen-with-drop .chosen-single div b{
    background-position:-18px 2px;
}

.with_frm_style .chosen-container-active .chosen-choices {
	border: 1px solid #5897fb;
	-webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
	        box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
}

.with_frm_style .chosen-container-active .chosen-choices li.search-field input[type="text"]{
    color:#111 !important;
}

.with_frm_style .chosen-disabled{
    opacity:0.5 !important;
    cursor:default;
}

.with_frm_style .chosen-disabled .chosen-single{
    cursor:default;
}

.with_frm_style .chosen-disabled .chosen-choices .search-choice .search-choice-close{
    cursor:default;
}

.with_frm_style .chosen-rtl{
    text-align:right;
}

.with_frm_style .chosen-rtl .chosen-single{
    overflow:visible;
    padding:0 8px 0 0;
}

.with_frm_style .chosen-rtl .chosen-single span{
    margin-right:0;
    margin-left:26px;
    direction:rtl;
}

.with_frm_style .chosen-rtl .chosen-single-with-deselect span{
    margin-left:38px;
}

.with_frm_style .chosen-rtl .chosen-single div{
    right:auto;
    left:3px;
}

.with_frm_style .chosen-rtl .chosen-single abbr{
    right:auto;
    left:26px;
}

.with_frm_style .chosen-rtl .chosen-choices li{
    float:right;
}

.with_frm_style .chosen-rtl .chosen-choices li.search-field input[type="text"]{
    direction:rtl;
}

.with_frm_style .chosen-rtl .chosen-choices li.search-choice{
    margin:1px 5px 1px 0;
    padding:3px 5px 3px 19px;
}

.with_frm_style .chosen-rtl .chosen-choices li.search-choice .search-choice-close{
	right:auto;
	left:4px;
}

.with_frm_style .chosen-rtl.chosen-container-single .chosen-results{
    margin:0 0 4px 4px;
    padding:0 4px 0 0;
}

.with_frm_style .chosen-rtl .chosen-results li.group-option{
    padding-right:15px;
    padding-left:0;
}

.with_frm_style .chosen-rtl.chosen-container-active.chosen-with-drop .chosen-single div{
    border-right:none;
}

.with_frm_style .chosen-rtl .chosen-search input[type="text"]{
    padding:4px 5px 4px 20px;
    background:url('../wp-content/plugins/formidable-pro/images/chosen-sprite.png') no-repeat -30px -20px;
    direction:rtl;
}

.with_frm_style .chosen-rtl.chosen-container-single .chosen-single div b{
    background-position:6px 2px;
}

.with_frm_style .chosen-rtl.chosen-container-single.chosen-with-drop .chosen-single div b{
    background-position:-12px 2px;
}

/** Fix for overlapping options **/
.with_frm_style .frm_repeat_sec,
.with_frm_style .frm_repeat_inline,
.with_frm_style .frm_repeat_grid {
	position: relative;
}

@media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min-resolution: 144dpi){
    .with_frm_style .chosen-rtl .chosen-search input[type="text"],
    .with_frm_style .chosen-container-single .chosen-single abbr,
    .with_frm_style .chosen-container-single .chosen-single div b,
    .with_frm_style .chosen-container-single .chosen-search input[type="text"],
    .with_frm_style .chosen-container-multi .chosen-choices .search-choice .search-choice-close,
    .with_frm_style .chosen-container .chosen-results-scroll-down span,
    .with_frm_style .chosen-container .chosen-results-scroll-up span{
        background-image:url('../wp-content/plugins/formidable-pro/images/chosen-sprite2x.png') !important;
        background-size:52px 37px !important;
        background-repeat:no-repeat !important;
    }
}
/*
* The MIT License
* Copyright (c) 2012 Matias Meno <m@tias.me>
*/
@-webkit-keyframes passing-through {
	0% {
		opacity: 0;
		-webkit-transform: translateY(40px);
		-moz-transform: translateY(40px);
		-ms-transform: translateY(40px);
		-o-transform: translateY(40px);
		transform: translateY(40px);
	}
	30%, 70% {
		opacity: 1;
		-webkit-transform: translateY(0px);
		-moz-transform: translateY(0px);
		-ms-transform: translateY(0px);
		-o-transform: translateY(0px);
		transform: translateY(0px);
	}
	100% {
		opacity: 0;
		-webkit-transform: translateY(-40px);
		-moz-transform: translateY(-40px);
		-ms-transform: translateY(-40px);
		-o-transform: translateY(-40px);
		transform: translateY(-40px);
	}

}
@-moz-keyframes passing-through {
	0% {
		opacity: 0;
		-webkit-transform: translateY(40px);
		-moz-transform: translateY(40px);
		-ms-transform: translateY(40px);
		-o-transform: translateY(40px);
		transform: translateY(40px);
	}
	30%, 70% {
		opacity: 1;
		-webkit-transform: translateY(0px);
		-moz-transform: translateY(0px);
		-ms-transform: translateY(0px);
		-o-transform: translateY(0px);
		transform: translateY(0px);
	}
	100% {
		opacity: 0;
		-webkit-transform: translateY(-40px);
		-moz-transform: translateY(-40px);
		-ms-transform: translateY(-40px);
		-o-transform: translateY(-40px);
		transform: translateY(-40px);
	}

}
@keyframes passing-through {
	0% {
		opacity: 0;
		-webkit-transform: translateY(40px);
		-moz-transform: translateY(40px);
		-ms-transform: translateY(40px);
		-o-transform: translateY(40px);
		transform: translateY(40px);
	}
	30%, 70% {
		opacity: 1;
		-webkit-transform: translateY(0px);
		-moz-transform: translateY(0px);
		-ms-transform: translateY(0px);
		-o-transform: translateY(0px);
		transform: translateY(0px);
	}
	100% {
		opacity: 0;
		-webkit-transform: translateY(-40px);
		-moz-transform: translateY(-40px);
		-ms-transform: translateY(-40px);
		-o-transform: translateY(-40px);
		transform: translateY(-40px);
	}

}
@-webkit-keyframes slide-in {
	0% {
		opacity: 0;
		-webkit-transform: translateY(40px);
		-moz-transform: translateY(40px);
		-ms-transform: translateY(40px);
		-o-transform: translateY(40px);
		transform: translateY(40px);
	}
	30% {
		opacity: 1;
		-webkit-transform: translateY(0px);
		-moz-transform: translateY(0px);
		-ms-transform: translateY(0px);
		-o-transform: translateY(0px);
		transform: translateY(0px);
	}

}
@-moz-keyframes slide-in {
	0% {
		opacity: 0;
		-webkit-transform: translateY(40px);
		-moz-transform: translateY(40px);
		-ms-transform: translateY(40px);
		-o-transform: translateY(40px);
		transform: translateY(40px);
	}
	30% {
		opacity: 1;
		-webkit-transform: translateY(0px);
		-moz-transform: translateY(0px);
		-ms-transform: translateY(0px);
		-o-transform: translateY(0px);
		transform: translateY(0px);
	}

}
@keyframes slide-in {
	0% {
		opacity: 0;
		-webkit-transform: translateY(40px);
		-moz-transform: translateY(40px);
		-ms-transform: translateY(40px);
		-o-transform: translateY(40px);
		transform: translateY(40px);
	}
	30% {
		opacity: 1;
		-webkit-transform: translateY(0px);
		-moz-transform: translateY(0px);
		-ms-transform: translateY(0px);
		-o-transform: translateY(0px);
		transform: translateY(0px);
	}

}

.frm_dropzone, .frm_dropzone * {
	box-sizing: border-box;
}

.frm_dropzone.frm_single_upload,
.frm_dropzone.dz-clickable {
	min-height: 60px;
	margin-top:5px;
	line-height:1.42857143;
}

.frm_dropzone.dz-clickable * {
	cursor: default;
}

.frm_dropzone.frm_single_upload {
	max-width: 200px;
}

.frm_dropzone.frm_single_upload.dz-started {
    max-width: 300px;
}

.frm_form_field.frm_full .frm_dropzone.dz-clickable.frm_single_upload,
.frm_form_field.frm_full_upload .frm_dropzone.dz-clickable.frm_single_upload{
	max-width:100%;
}

.frm_form_field.frm_full .frm_dropzone.dz-clickable.frm_single_upload .dz-message,
.frm_form_field.frm_full_upload .frm_dropzone.dz-clickable.frm_single_upload .dz-message{
	margin: .5em 0 1em;
}

.frm_dropzone .dz-message{
	border: 2px dashed #dfdfdf;
	background:#ffffff;
	padding: 20px;
	border-radius:5px;
	cursor: pointer;
	display:none;
	font-size:20px;
	text-align: center;
	margin: .5em 0 1em;
}

.frm_dropzone.dz-clickable.frm_single_upload .dz-message{
	margin: 0 0 .5em 0;
}

.frm_dropzone.frm_single_upload.dz-started .dz-message{
	display: none;
}

.frm_dropzone.dz-clickable .dz-message,
.frm_dropzone .frm_upload_icon{
	display:block;
}
.frm_dropzone.dz-clickable .dz-message,
.frm_dropzone.dz-clickable .dz-message * {
	cursor: pointer;
}
#frm_form_editor_container .frm_dropzone.dz-clickable,
#frm_form_editor_container .frm_dropzone.dz-clickable *{
	cursor: default;
}

.frm_dropzone.dz-drag-hover .dz-message {
	opacity: 0.5;
}
.frm_dropzone .frm_upload_icon:before{
	font-size:40px;
}
.frm_dropzone .frm_small_text {
	font-size:14px;
}
.frm_dropzone.dz-drag-hover {
	border-style: solid;
}
.frm_dropzone .dz-preview {
	padding: 15px 0;
	border-bottom: 1px solid #dfdfdf;
}

.frm_dropzone .dz-preview:last-child {
	border-bottom: none;
}

.frm_dropzone .dz-preview:hover {
	z-index: 1000;
}

.frm_dropzone .dz-preview.dz-file-preview .dz-details {
	opacity: 1;
}
.frm_dropzone .dz-preview.dz-image-preview .dz-details {
	-webkit-transition: opacity 0.2s linear;
	-moz-transition: opacity 0.2s linear;
	-ms-transition: opacity 0.2s linear;
	-o-transition: opacity 0.2s linear;
	transition: opacity 0.2s linear;
}
.frm_dropzone .dz-preview .dz-remove {
	cursor: pointer;
	border: none;
	float: right;
}

.frm_dropzone .dz-preview:hover .dz-details {
	opacity: 1;
}

.frm_dropzone .dz-preview .dz-details {
	font-size: 14px;
	margin: 5px 0 10px;
}

.frm_dropzone .dz-preview .dz-details .dz-size,
.frm_dropzone .dz-preview .dz-details .dz-filename {
	display: inline-block;
	overflow: hidden;
	white-space: nowrap;
}

.frm_dropzone .dz-preview .dz-details .dz-size strong {
	font-weight: normal;
}

.frm_dropzone .dz-preview .dz-details .dz-filename {
	max-width: 65%;
	text-overflow: ellipsis;
}

.frm_dropzone .dz-preview .dz-details .dz-filename a{
	cursor:pointer;
}

.frm_dropzone .dz-preview .dz-column {
	float: right;
	width: 68%;
}

.frm_dropzone .dz-preview .dz-image {
	overflow: hidden;
	width: 30%;
	height: 60px;
	display: block;
	float: left;
	margin-right: 2%;
}

.frm_dropzone .dz-preview .dz-image img {
	display: block;
	margin:0 auto;
	max-height: 60px;
}
.frm_dropzone .dz-preview.dz-success .dz-success-mark {
	-webkit-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
	-moz-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
	-ms-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
	-o-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
	animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
}

.frm_dropzone .dz-preview.dz-processing .dz-progress {
	-webkit-transition: all 0.2s linear;
	-moz-transition: all 0.2s linear;
	-ms-transition: all 0.2s linear;
	-o-transition: all 0.2s linear;
	transition: all 0.2s linear;
}

.frm_dropzone .dz-preview .dz-progress {
	pointer-events: none;
	position: relative;
	height: 10px;
	width: 100%;
	background: rgba(221, 221, 221, 1);
	-webkit-transform: scale(1);
	border-radius: 8px;
	overflow: hidden;
}

.frm_dropzone .dz-preview .dz-progress .dz-upload,
.frm_dropzone .dz-preview.dz-complete .dz-progress{
	background: #333;
	background: linear-gradient(to bottom, #666, #444);
}

.frm_dropzone .dz-preview .dz-progress .dz-upload {
	position: absolute;
	top: 0;
	left: 0;
	bottom: 0;
	width: 0;
	-webkit-transition: width 300ms ease-in-out;
	-moz-transition: width 300ms ease-in-out;
	-ms-transition: width 300ms ease-in-out;
	-o-transition: width 300ms ease-in-out;
	transition: width 300ms ease-in-out;
}
.frm_dropzone .dz-preview.dz-error .dz-error-message {
	display: block;
	opacity: 1;
	pointer-events: auto;
}
.frm_dropzone .dz-preview .dz-error-message {
	pointer-events: none;
	display: none;
	opacity: 0;
	-webkit-transition: opacity 0.3s ease;
	-moz-transition: opacity 0.3s ease;
	-ms-transition: opacity 0.3s ease;
	-o-transition: opacity 0.3s ease;
	transition: opacity 0.3s ease;
	color: #B94A48;
	padding: 0.5em;
}

.frm_dropzone .fallback input[type=file]{
	display:block;
}

/* Compact version */
.frm_compact_text{
	display:none;
}

.frm_compact .frm_dropzone.dz-clickable{
	padding:0;
	border:none;
	background-color:transparent;
}

.frm_compact .frm_dropzone.dz-clickable.frm_single_upload{
	max-width:100%;
}

.frm_compact .frm_compact_text{
	display:inline;
}

.frm_upload_text button,
.frm_compact_text button {
	background: none !important;
	color: inherit !important;
	border: none !important;
	padding: 0 !important;
	font: inherit !important;
	cursor: pointer !important;
	outline: inherit !important;
}

.frm_compact .frm_dropzone.dz-clickable.frm_single_upload .dz-message,
.frm_compact .frm_dropzone.dz-clickable .dz-message{
	font-size:14px;
	border:1px solid #dfdfdf;
	background:#fff;
	display: inline-block;
	border-radius: 4px;
	padding: 6px 11px;
	box-sizing: border-box;
	box-shadow: 0 1px 1px #eeeeee;
	vertical-align: middle;
	margin: 0 0 1em;
}

.frm_compact .frm_dropzone.frm_single_upload.dz-started .dz-message,
.frm_compact .frm_dropzone.frm_single_upload.dz-started.dz-clickable .dz-message {
	display: none;
}

.frm_compact .frm_dropzone .frm_upload_icon:before{
	font-size:22px;
	padding-right:7px;
	vertical-align: middle;
}

.frm_compact .frm_dropzone .frm_upload_icon{
	display:inline;
}

.frm_compact .frm_dropzone .dz-preview{
	min-height:20px;
	max-width:200px;
	margin: 0 5px;
	padding: 0;
	display: inline-block;
	border-bottom: none;
}

.frm_compact .frm_dropzone .dz-preview.frm_clearfix:after {
	content:'';
}

.frm_compact .frm_dropzone .frm_upload_text,
.frm_compact .frm_dropzone .frm_small_text,
.frm_compact .frm_dropzone .dz-preview .dz-image,
.frm_compact .frm_dropzone .dz-preview .dz-details .dz-size{
	display:none;
}

.frm_compact .frm_dropzone .dz-preview .dz-details {
	margin: 0;
}

.frm_compact .frm_dropzone .dz-preview .dz-column {
    float: none;
    width: 100%;
}

.frm_compact .frm_dropzone .dz-preview .dz-details .dz-filename {
	overflow: hidden;
	text-overflow: ellipsis;
}

/* Prevent horizontal scroll on RTL sites */
.frm-show-form .dz-hidden-input{
	display:none;
}.frm_rootline_group{
	margin: 20px 0 30px;
}
			
ul.frm_page_bar{
	list-style-type: none;
	margin: 0 !important;
	padding: 0;
	width: 100%;
	float: left;
	display: table;
	display: -webkit-flex;
	display: flex;
	flex-wrap: wrap;
	box-sizing: border-box;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
}

ul.frm_page_bar li{
	display: inline-block;
	-ms-flex: 1;
	flex: 1;
}

.frm_forms .frm_page_bar input,
.frm_forms .frm_page_bar input:disabled{
	transition: background-color 0.1s ease;
	color: #ffffff;
	background-color: #dddddd;
	font-size: 18px;
	border-width: 2px;
	border-style: solid;
	border-color: #dfdfdf;
}

.frm_forms .frm_page_bar input:focus{
	outline: none;
}

.frm_forms .frm_progress_line input.frm_page_back{
	background-color: #4199FD;
}

.frm_forms .frm_page_bar .frm_current_page input[type="button"]{
	background-color: #dddddd;
	border-color: #dfdfdf;
}
	
.frm_rootline_single{
	text-align: center;
	margin: 0;
	padding: 0;
}

.frm_current_page .frm_rootline_title{
	color: #4199FD;
}

.frm_rootline_title,
.frm_pages_complete,
.frm_percent_complete {
	font-size:14px;
	padding:4px;
}

.frm_pages_complete {
	float: right;
	margin-right:13px;
}

.frm_percent_complete {
	float: left;
	margin-left:13px;
}

.frm_forms .frm_progress_line input,
.frm_forms .frm_progress_line input:disabled {
	width: 100%;
	border: none;
	border-top: 1px solid #dfdfdf;
	border-bottom: 1px solid #dfdfdf;
	box-shadow: inset 0 10px 20px -15px #aaa;
	margin: 5px 0;
	padding: 6px 0;
	border-radius:0;
	font-size:0;
	line-height:15px;
}

.frm_forms .frm_progress_line.frm_show_lines input {
	border-left: 1px solid #ffffff;
	border-right: 1px solid #ffffff;
}

.frm_progress_line .frm_rootline_single {
	display: flex;
	flex-direction: column;
	justify-content: flex-end;
}

.frm_forms .frm_progress_line li:first-of-type input {
	border-top-left-radius: 15px;
	border-bottom-left-radius: 15px;
	border-left: 1px solid #4199FD;
}

.frm_forms .frm_progress_line li:last-of-type input {
	border-top-right-radius: 15px;
	border-bottom-right-radius: 15px;
	border-right: 1px solid #4199FD;
}

.frm_forms .frm_progress_line li:last-of-type input.frm_page_skip {
	border-right: 1px solid #dfdfdf;
}

.frm_forms .frm_progress_line .frm_current_page input[type="button"] {
	border-left: 1px solid #dfdfdf;
}

.frm_forms .frm_progress_line.frm_show_lines .frm_current_page input[type="button"] {
	border-right: 1px solid #ffffff;
}

.frm_forms .frm_progress_line input.frm_page_back {
	border-color: #4199FD;
}

.frm_forms .frm_progress_line.frm_show_lines input.frm_page_back{
	border-left-color: #4199FD;
	border-right-color: #ffffff;
}

/* Start RTL */
.frm_rtl.frm_forms .frm_progress_line li:first-of-type input {
	border-top-right-radius: 15px;
	border-bottom-right-radius: 15px;
	border-top-left-radius:0px;
	border-bottom-left-radius:0px;
	border-right: 1px solid #4199FD;
}

.frm_rtl.frm_forms .frm_progress_line li:last-of-type input	{
	border-top-left-radius: 15px;
	border-bottom-left-radius: 15px;
	border-top-right-radius:0px;
	border-bottom-right-radius:0px;
	border-left: 1px solid #4199FD;
}

.frm_rtl.frm_forms .frm_progress_line li:last-of-type input.frm_page_skip {
	border-left: 1px solid #dfdfdf;
	border-right:none;
}

.frm_rtl.frm_forms .frm_progress_line .frm_current_page input[type="button"] {
	border-right: 1px solid #dfdfdf;
	border-left:none;
}

.frm_rtl.frm_forms .frm_progress_line.frm_show_lines .frm_current_page input[type="button"] {
	border-left: 1px solid #ffffff;
	border-right:none;
}
/* End RTL */

.frm_rootline.frm_show_lines:before {
    border-top-width: 2px;
	border-top-style: solid;
	border-top-color: #dfdfdf;
    content: "";
    margin: 0 auto;
    position: absolute;
    top: 15px;
    left: 0;
    right: 0;
    bottom: 0;
    width: 100%;
    z-index: -1;
}

.frm_rootline.frm_show_lines{
	position: relative;
    z-index: 1;
}

.frm_rootline.frm_show_lines span{
	display:block;
}

.frm_forms .frm_rootline input {
	width: 30px;
	height: 30px;
	min-height:auto;
	border-radius: 30px;
	padding:0;
}

.frm_forms .frm_rootline input:focus {
	border-color: #4199FD;
}

.frm_forms .frm_rootline .frm_current_page input[type="button"] {
	border-color: #2d85e9;
	background-color: #4199FD;
	color: #ffffff;
}

.frm_forms .frm_progress_line input,
.frm_forms .frm_progress_line input:disabled,
.frm_forms .frm_progress_line .frm_current_page input[type="button"],
.frm_forms .frm_rootline.frm_no_numbers input,
.frm_forms .frm_rootline.frm_no_numbers .frm_current_page input[type="button"] {
	color: transparent !important;
}

@media only screen and (max-width: 700px) {
	.frm_progress span.frm_rootline_title,
	.frm_rootline.frm_rootline_10 span.frm_rootline_title,
	.frm_rootline.frm_rootline_9 span.frm_rootline_title,
	.frm_rootline.frm_rootline_8 span.frm_rootline_title,
	.frm_rootline.frm_rootline_7 span.frm_rootline_title,
	.frm_rootline.frm_rootline_6 span.frm_rootline_title,
	.frm_rootline.frm_rootline_5 span.frm_rootline_title{
		display:none;
	}
}

@media only screen and (max-width: 500px) {
	.frm_rootline.frm_rootline_4 span.frm_rootline_title,
	.frm_rootline.frm_rootline_3 span.frm_rootline_title{
		display:none;
	}
}

/* Responsive */
@media only screen and (max-width: 900px) {
	.frm_form_field .frm_repeat_grid .frm_form_field.frm_sixth .frm_primary_label,
	.frm_form_field .frm_repeat_grid .frm_form_field.frm_seventh .frm_primary_label,
	.frm_form_field .frm_repeat_grid .frm_form_field.frm_eighth .frm_primary_label{
		display: block !important;
	}
}

@media only screen and (max-width: 600px) {
	.frm_form_field.frm_four_col .frm_opt_container{
		grid-template-columns: repeat(2, 1fr);
	}
}

@media only screen and (max-width: 500px) {
	.frm_form_field.frm_two_col .frm_radio,
	.frm_form_field.frm_two_col .frm_checkbox,
	.frm_form_field.frm_three_col .frm_radio,
	.frm_form_field.frm_three_col .frm_checkbox{
		width: auto;
		margin-right: 0;
		float: none;
		display:block;
	}

	.frm_form_field input[type=file] {
		max-width:220px;
	}

	.with_frm_style .frm-g-recaptcha > div > div,
	.with_frm_style .g-recaptcha > div > div{
		width:inherit !important;
		display:block;
		overflow:hidden;
		max-width:302px;
		border-right:1px solid #d3d3d3;
		border-radius:4px;
		box-shadow:2px 0px 4px -1px rgba(0,0,0,.08);
		-moz-box-shadow:2px 0px 4px -1px rgba(0,0,0,.08);
	}

	.with_frm_style .g-recaptcha iframe,
	.with_frm_style .frm-g-recaptcha iframe{
		width:100%;
	}
}
.with_frm_style .frm_form_field{
    clear:both;
}

.frm_form_field,
.frm_form_field.frm_inline_container,
.frm_form_field.frm_right_container,
.frm_form_field.frm_left_container{
	width:auto;
}

.frm_inline_form .frm_form_field.form-field{
    margin-right:2.5%;
	display:inline-block;
}

.frm_inline_form .frm_submit{
	display:inline-block;
}

.frm_form_field.frm2,
.frm_submit.frm2,
.frm_form_field.frm3,
.frm_submit.frm3,
.frm_form_field.frm4,
.frm_submit.frm4,
.frm_form_field.frm6,
.frm_submit.frm6,
.frm_form_field.frm8,
.frm_submit.frm8,
.frm_form_field.frm9,
.frm_submit.frm9,
.frm_form_field.frm10,
.frm_submit.frm10,
.frm_form_field.frm_right_half,
.frm_form_field.frm_right_third,
.frm_form_field.frm_right_two_thirds,
.frm_form_field.frm_right_fourth,
.frm_form_field.frm_right_fifth,
.frm_form_field.frm_right_inline,
.frm_form_field.frm_last_half,
.frm_form_field.frm_last_third,
.frm_form_field.frm_last_two_thirds,
.frm_form_field.frm_last_fourth,
.frm_form_field.frm_last_fifth,
.frm_form_field.frm_last_sixth,
.frm_form_field.frm_last_seventh,
.frm_form_field.frm_last_eighth,
.frm_form_field.frm_last_inline,
.frm_form_field.frm_last,
.frm_form_field.frm_half,
.frm_submit.frm_half,
.frm_form_field.frm_third,
.frm_submit.frm_third,
.frm_form_field.frm_two_thirds,
.frm_form_field.frm_fourth,
.frm_submit.frm_fourth,
.frm_form_field.frm_three_fourths,
.frm_form_field.frm_fifth,
.frm_submit.frm_fifth,
.frm_form_field.frm_two_fifths,
.frm_form_field.frm_three_fifths,
.frm_form_field.frm_four_fifths,
.frm_form_field.frm_sixth,
.frm_submit.frm_sixth,
.frm_form_field.frm_seventh,
.frm_submit.frm_seventh,
.frm_form_field.frm_eighth,
.frm_submit.frm_eighth,
.frm_form_field.frm_inline,
.frm_submit.frm_inline{
    clear:none;
    float:left;
	margin-left:2.5%;
}

.frm_form_field.frm_left_half,
.frm_form_field.frm_left_third,
.frm_form_field.frm_left_two_thirds,
.frm_form_field.frm_left_fourth,
.frm_form_field.frm_left_fifth,
.frm_form_field.frm_left_inline,
.frm_form_field.frm_first_half,
.frm_form_field.frm_first_third,
.frm_form_field.frm_first_two_thirds,
.frm_form_field.frm_first_fourth,
.frm_form_field.frm_first_fifth,
.frm_form_field.frm_first_sixth,
.frm_form_field.frm_first_seventh,
.frm_form_field.frm_first_eighth,
.frm_form_field.frm_first_inline,
.frm_form_field.frm_first{
    clear:left;
    float:left;
	margin-left:0;
}

.frm_form_field.frm6,
.frm_submit.frm6,
.frm_form_field.frm_left_half,
.frm_form_field.frm_right_half,
.frm_form_field.frm_first_half,
.frm_form_field.frm_last_half,
.frm_form_field.frm_half,
.frm_submit.frm_half{
    width:48.75%;
}

.frm_form_field.frm4,
.frm_submit.frm4,
.frm_form_field.frm_left_third,
.frm_form_field.frm_third,
.frm_submit.frm_third,
.frm_form_field.frm_right_third,
.frm_form_field.frm_first_third,
.frm_form_field.frm_last_third{
    width:31.66%;
}

.frm_form_field.frm8,
.frm_submit.frm8,
.frm_form_field.frm_left_two_thirds,
.frm_form_field.frm_right_two_thirds,
.frm_form_field.frm_first_two_thirds,
.frm_form_field.frm_last_two_thirds,
.frm_form_field.frm_two_thirds{
    width:65.82%;
}

.frm_form_field.frm3,
.frm_submit.frm3,
.frm_form_field.frm_left_fourth,
.frm_form_field.frm_fourth,
.frm_submit.frm_fourth,
.frm_form_field.frm_right_fourth,
.frm_form_field.frm_first_fourth,
.frm_form_field.frm_last_fourth{
    width:23.12%;
}

.frm_form_field.frm9,
.frm_form_field.frm_three_fourths{
	width:74.36%;
}

.frm_form_field.frm_left_fifth,
.frm_form_field.frm_fifth,
.frm_submit.frm_fifth,
.frm_form_field.frm_right_fifth,
.frm_form_field.frm_first_fifth,
.frm_form_field.frm_last_fifth{
    width:18%;
}

.frm_form_field.frm_two_fifths {
	width:38.5%;
}

.frm_form_field.frm_three_fifths {
	width:59%;
}

.frm_form_field.frm_four_fifths {
	width:79.5%;
}

.frm_form_field.frm2,
.frm_submit.frm2,
.frm_form_field.frm_sixth,
.frm_submit.frm_sixth,
.frm_form_field.frm_first_sixth,
.frm_form_field.frm_last_sixth{
    width:14.58%;
}

.frm_form_field.frm10,
.frm_submit.frm10{
    width:82.92%;
}

.frm_form_field.frm_seventh,
.frm_submit.frm_seventh,
.frm_form_field.frm_first_seventh,
.frm_form_field.frm_last_seventh{
    width:12.14%;
}

.frm_form_field.frm_eighth,
.frm_submit.frm_eighth,
.frm_form_field.frm_first_eighth,
.frm_form_field.frm_last_eighth{
    width:10.31%;
}

.frm_form_field.frm_left_inline,
.frm_form_field.frm_first_inline,
.frm_form_field.frm_inline,
.frm_submit.frm_inline,
.frm_form_field.frm_right_inline,
.frm_form_field.frm_last_inline{
    width:auto;
}

.frm_full,
.frm_full .wp-editor-wrap,
.frm_full input:not([type='checkbox']):not([type='radio']):not([type='button']),
.frm_full select,
.frm_full textarea{
    width:100% !important;
}

.frm_full .wp-editor-wrap input{
    width:auto !important;
}

.frm_form_field.frm_inline_container,
.frm_form_field.frm_right_container,
.frm_form_field.frm_left_container,
.frm_combo_inputs_container,
.frm_grid_container,
.frm_form_fields .frm_section_heading,
.frm_form_fields .frm_fields_container,
.frm_form_field.frm_two_col .frm_opt_container,
.frm_form_field.frm_three_col .frm_opt_container,
.frm_form_field.frm_four_col .frm_opt_container{
	display:block;
}

.frm_form_field.frm_left_container .frm_primary_label{
	float:left;
	display:inline;
	max-width:33%;
	margin-right:5%;
}

.with_frm_style .frm_conf_field.frm_left_container .frm_primary_label{
	display:inline;
	visibility:hidden;
}

.frm_form_field.frm_left_container input:not([type=radio]):not([type=checkbox]),
.frm_form_field.frm_left_container:not(.frm_dynamic_select_container) select,
.frm_form_field.frm_left_container textarea,
.frm_form_field.frm_left_container .wp-editor-wrap,
.frm_form_field.frm_left_container .frm_opt_container,
.frm_form_field.frm_left_container .frm_dropzone,
.frm_form_field.frm_left_container .frm-g-recaptcha,
.frm_form_field.frm_left_container .g-recaptcha,
.frm_form_field.frm_left_container .chosen-container,
.frm_form_field.frm_left_container .frm_combo_inputs_container,
.frm_form_field.frm_right_container input:not([type=radio]):not([type=checkbox]),
.frm_form_field.frm_right_container:not(.frm_dynamic_select_container) select,
.frm_form_field.frm_right_container textarea,
.frm_form_field.frm_right_container .wp-editor-wrap,
.frm_form_field.frm_right_container .frm_opt_container,
.frm_form_field.frm_right_container .frm_dropzone,
.frm_form_field.frm_right_container .frm-g-recaptcha,
.frm_form_field.frm_right_container .g-recaptcha,
.frm_form_field.frm_right_container .chosen-container,
.frm_form_field.frm_right_container .frm_combo_inputs_container{
	max-width:62%;
}

.frm_form_field.frm_left_container .frm_combo_inputs_container input,
.frm_form_field.frm_left_container .frm_combo_inputs_container select,
.frm_form_field.frm_right_container .frm_combo_inputs_container input,
.frm_form_field.frm_right_container .frm_combo_inputs_container select{
    max-width:100%;
}

.frm_form_field.frm_left_container .frm_data_container,
.frm_form_field.frm_right_container .frm_data_container,
.frm_form_field.frm_inline_container .frm_data_container,
.frm_form_field.frm_left_container .frm_opt_container,
.frm_form_field.frm_right_container .frm_opt_container,
.frm_form_field.frm_inline_container .frm_opt_container,
.frm_form_field.frm_left_container .frm_combo_inputs_container,
.frm_form_field.frm_right_container .frm_combo_inputs_container,
.frm_form_field.frm_inline_container .frm_combo_inputs_container,
.frm_form_field.frm_left_container .wp-editor-wrap,
.frm_form_field.frm_right_container .wp-editor-wrap,
.frm_form_field.frm_inline_container .wp-editor-wrap,
.frm_form_field.frm_left_container .frm_dropzone,
.frm_form_field.frm_right_container .frm_dropzone,
.frm_form_field.frm_inline_container .frm_dropzone,
.frm_form_field.frm_left_container .frm-g-recaptcha,
.frm_form_field.frm_right_container .frm-g-recaptcha,
.frm_form_field.frm_inline_container .frm-g-recaptcha,
.frm_form_field.frm_left_container .g-recaptcha,
.frm_form_field.frm_right_container .g-recaptcha,
.frm_form_field.frm_inline_container .g-recaptcha{
	display:inline-block;
}

.frm_form_field.frm_left_half.frm_left_container .frm_primary_label,
.frm_form_field.frm_right_half.frm_left_container .frm_primary_label,
.frm_form_field.frm_left_half.frm_right_container .frm_primary_label,
.frm_form_field.frm_right_half.frm_right_container .frm_primary_label,
.frm_form_field.frm_first_half.frm_left_container .frm_primary_label,
.frm_form_field.frm_last_half.frm_left_container .frm_primary_label,
.frm_form_field.frm_first_half.frm_right_container .frm_primary_label,
.frm_form_field.frm_last_half.frm_right_container .frm_primary_label,
.frm_form_field.frm_half.frm_right_container .frm_primary_label,
.frm_form_field.frm_half.frm_left_container .frm_primary_label{
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	box-sizing:border-box;
	max-width:33%;
}

.with_frm_style .frm_left_container .frm_primary_label{
	float:left;
	display:inline !important;
	width:150px;
	max-width:33% !important;
	margin-right:10px !important;
}

.with_frm_style .frm_right_container .frm_primary_label{
	display:inline !important;
	width:150px;
	max-width:33% !important;
	margin-left:10px !important;
}

.with_frm_style .frm_form_field.frm_left_container input:not([type=radio]):not([type=checkbox]),
.with_frm_style .frm_form_field.frm_left_container:not(.frm_dynamic_select_container) select,
.with_frm_style .frm_form_field.frm_left_container textarea,
.with_frm_style .frm_form_field.frm_left_container .frm_opt_container,
.with_frm_style .frm_form_field.frm_left_container .frm-g-recaptcha,
.with_frm_style .frm_form_field.frm_left_container .g-recaptcha,
.with_frm_style .frm_form_field.frm_left_container .chosen-container,
.with_frm_style .frm_form_field.frm_right_container input:not([type=radio]):not([type=checkbox]),
.with_frm_style .frm_form_field.frm_right_container:not(.frm_dynamic_select_container) select,
.with_frm_style .frm_form_field.frm_right_container textarea,
.with_frm_style .frm_form_field.frm_right_container .frm_opt_container,
.with_frm_style .frm_form_field.frm_right_container .g-recaptcha,
.with_frm_style .frm_form_field.frm_right_container .frm-g-recaptcha,
.with_frm_style .frm_form_field.frm_right_container .chosen-container{
	max-width:62% !important;
}

.with_frm_style .frm_form_field.frm_left_container .frm_combo_inputs_container .frm_form_field input,
.with_frm_style .frm_form_field.frm_left_container .frm_combo_inputs_container .frm_form_field select,
.with_frm_style .frm_form_field.frm_right_container .frm_combo_inputs_container .frm_form_field input,
.with_frm_style .frm_form_field.frm_right_container .frm_combo_inputs_container .frm_form_field select{
	max-width:100% !important;
}

.with_frm_style .frm_form_field.frm_left_container .frm_opt_container,
.with_frm_style .frm_form_field.frm_right_container .frm_opt_container,
.with_frm_style .frm_form_field.frm_left_container .g-recaptcha,
.with_frm_style .frm_form_field.frm_right_container .g-recaptcha,
.with_frm_style .frm_form_field.frm_left_container .frm-g-recaptcha,
.with_frm_style .frm_form_field.frm_right_container .frm-g-recaptcha{
	display:inline-block !important;
}

.with_frm_style .frm_left_container > p.description::before,
.with_frm_style .frm_left_container > div.description::before,
.with_frm_style .frm_left_container > div.frm_description::before,
.with_frm_style .frm_left_container > .frm_error::before,
.with_frm_style .frm_right_container > p.description::after,
.with_frm_style .frm_right_container > div.description::after,
.with_frm_style .frm_right_container > div.frm_description::after,
.with_frm_style .frm_right_container > .frm_error::after{
	content:'' !important;
	display:inline-block !important;
	width:150px;
	max-width:33% !important;
	margin-right:10px !important;
}

.with_frm_style .frm_left_container.frm_inline .frm_primary_label{
	max-width:90% !important;
}

.with_frm_style .form-field.frm_col_field{
    clear:none;
    float:left;
    margin-right:20px;
}

.with_frm_style .form-field.frm_col_field div.frm_description{
	width:auto;
    max-width:100%;
}

.with_frm_style .frm_inline_container .frm_primary_label,
.with_frm_style .frm_inline_container.frm_dynamic_select_container .frm_opt_container{
    display:inline !important;
}

.with_frm_style .frm_inline_container .frm_primary_label{
	margin-right:10px !important;
}
/* End of left and right label styling */

/* Radio/checkbox columns */
.frm_form_field.frm_two_col .frm_radio,
.frm_form_field.frm_three_col .frm_radio,
.frm_form_field.frm_four_col .frm_radio,
.frm_form_field.frm_two_col .frm_checkbox,
.frm_form_field.frm_three_col .frm_checkbox,
.frm_form_field.frm_four_col .frm_checkbox{
    float:left;
}

.frm_form_field.frm_two_col .frm_radio,
.frm_form_field.frm_two_col .frm_checkbox{
    width:48%;
    margin-right:4%;
}

.frm_form_field.frm_three_col .frm_radio,
.frm_form_field.frm_three_col .frm_checkbox{
    width:30%;
    margin-right:5%;
}

.frm_form_field.frm_four_col .frm_radio,
.frm_form_field.frm_four_col .frm_checkbox{
    width:22%;
    margin-right:4%;
}

.frm_form_field.frm_two_col .frm_radio:nth-child(2n+2),
.frm_form_field.frm_two_col .frm_checkbox:nth-child(2n+2),
.frm_form_field.frm_three_col .frm_radio:nth-child(3n+3),
.frm_form_field.frm_three_col .frm_checkbox:nth-child(3n+3),
.frm_form_field.frm_four_col .frm_radio:nth-child(4n+4),
.frm_form_field.frm_four_col .frm_checkbox:nth-child(4n+4){
	margin-right:0;
}

/* RTL */

.with_frm_style.frm_rtl .frm_form_field.frm2,
.with_frm_style.frm_rtl .frm_form_field.frm3,
.with_frm_style.frm_rtl .frm_form_field.frm4,
.with_frm_style.frm_rtl .frm_form_field.frm6,
.with_frm_style.frm_rtl .frm_form_field.frm8,
.with_frm_style.frm_rtl .frm_form_field.frm9,
.with_frm_style.frm_rtl .frm_form_field.frm10,
.with_frm_style.frm_rtl .frm_form_field.frm_half,
.with_frm_style.frm_rtl .frm_form_field.frm_third,
.with_frm_style.frm_rtl .frm_form_field.frm_two_thirds,
.with_frm_style.frm_rtl .frm_form_field.frm_fourth,
.with_frm_style.frm_rtl .frm_form_field.frm_fifth,
.with_frm_style.frm_rtl .frm_form_field.frm_sixth,
.with_frm_style.frm_rtl .frm_form_field.frm_seventh,
.with_frm_style.frm_rtl .frm_form_field.frm_eighth,
.with_frm_style.frm_rtl .frm_form_field.frm_inline,
.with_frm_style.frm_rtl .frm_form_field.frm_left_half,
.with_frm_style.frm_rtl .frm_form_field.frm_left_third,
.with_frm_style.frm_rtl .frm_form_field.frm_left_two_thirds,
.with_frm_style.frm_rtl .frm_form_field.frm_left_fourth,
.with_frm_style.frm_rtl .frm_form_field.frm_left_fifth,
.with_frm_style.frm_rtl .frm_form_field.frm_left_inline,
.with_frm_style.frm_rtl .frm_form_field.frm_first_half,
.with_frm_style.frm_rtl .frm_form_field.frm_first_third,
.with_frm_style.frm_rtl .frm_form_field.frm_first_two_thirds,
.with_frm_style.frm_rtl .frm_form_field.frm_first_fourth,
.with_frm_style.frm_rtl .frm_form_field.frm_first_fifth,
.with_frm_style.frm_rtl .frm_form_field.frm_first_inline,
.with_frm_style.frm_rtl .frm_form_field.frm_right_half,
.with_frm_style.frm_rtl .frm_form_field.frm_right_third,
.with_frm_style.frm_rtl .frm_form_field.frm_right_two_thirds,
.with_frm_style.frm_rtl .frm_form_field.frm_right_fourth,
.with_frm_style.frm_rtl .frm_form_field.frm_right_fifth,
.with_frm_style.frm_rtl .frm_form_field.frm_right_inline,
.with_frm_style.frm_rtl .frm_form_field.frm_last_half,
.with_frm_style.frm_rtl .frm_form_field.frm_last_third,
.with_frm_style.frm_rtl .frm_form_field.frm_last_two_thirds,
.with_frm_style.frm_rtl .frm_form_field.frm_last_fourth,
.with_frm_style.frm_rtl .frm_form_field.frm_last_fifth,
.with_frm_style.frm_rtl .frm_form_field.frm_last_inline{
    float:right;
    margin-right:2.5%;
    margin-left:0;
	clear:none;
}

.with_frm_style.frm_rtl .frm_form_field.frm_left_half,
.with_frm_style.frm_rtl .frm_form_field.frm_first_half,
.with_frm_style.frm_rtl .frm_form_field.frm_first,
.with_frm_style.frm_rtl .frm_form_field.frm_left_third,
.with_frm_style.frm_rtl .frm_form_field.frm_first_third,
.with_frm_style.frm_rtl .frm_form_field.frm_first_two_thirds,
.with_frm_style.frm_rtl .frm_form_field.frm_left_two_thirds,
.with_frm_style.frm_rtl .frm_form_field.frm_first_fourth,
.with_frm_style.frm_rtl .frm_form_field.frm_left_fourth,
.with_frm_style.frm_rtl .frm_form_field.frm_left_fifth,
.with_frm_style.frm_rtl .frm_form_field.frm_first_fifth,
.with_frm_style.frm_rtl .frm_form_field.frm_left_inline,
.with_frm_style.frm_rtl .frm_form_field.frm_first_inline{
	clear:right;
    margin-right:0;
}

.with_frm_style.frm_rtl .frm_form_field.frm_two_col .frm_radio,
.with_frm_style.frm_rtl .frm_form_field.frm_three_col .frm_radio,
.with_frm_style.frm_rtl .frm_form_field.frm_four_col .frm_radio,
.with_frm_style.frm_rtl .frm_form_field.frm_two_col .frm_checkbox,
.with_frm_style.frm_rtl .frm_form_field.frm_three_col .frm_checkbox,
.with_frm_style.frm_rtl .frm_form_field.frm_four_col .frm_checkbox{
    float:right;
}

/* End RTL */

@media only screen and (max-width: 500px) {
	.with_frm_style .frm_form_field.frm_left_container input:not([type=radio]):not([type=checkbox]),
	.with_frm_style .frm_form_field.frm_left_container:not(.frm_dynamic_select_container) select,
	.with_frm_style .frm_form_field.frm_left_container textarea,
	.with_frm_style .frm_form_field.frm_left_container .frm_opt_container,
	.with_frm_style .frm_form_field.frm_left_container .frm-g-recaptcha,
	.with_frm_style .frm_form_field.frm_left_container .g-recaptcha,
	.with_frm_style .frm_form_field.frm_left_container .chosen-container,
	.with_frm_style .frm_form_field.frm_right_container input:not([type=radio]):not([type=checkbox]),
	.with_frm_style .frm_form_field.frm_right_container:not(.frm_dynamic_select_container) select,
	.with_frm_style .frm_form_field.frm_right_container textarea,
	.with_frm_style .frm_form_field.frm_right_container .frm_opt_container,
	.with_frm_style .frm_form_field.frm_right_container .frm-g-recaptcha,
	.with_frm_style .frm_form_field.frm_right_container .g-recaptcha,
	.with_frm_style .frm_form_field.frm_right_container .chosen-container{
		max-width:100% !important;
	}

	.with_frm_style .frm_left_container > p.description::before,
	.with_frm_style .frm_left_container > div.description::before,
	.with_frm_style .frm_left_container > div.frm_description::before,
	.with_frm_style .frm_left_container > .frm_error::before,
	.with_frm_style .frm_right_container > p.description::after,
	.with_frm_style .frm_right_container > div.description::after,
	.with_frm_style .frm_right_container > div.frm_description::after,
	.with_frm_style .frm_right_container > .frm_error::after{
		display:none !important;
	}

	.with_frm_style .frm_left_container .frm_primary_label,
	.with_frm_style .frm_right_container .frm_primary_label{
		width:100% !important;
		max-width:100% !important;
		margin-right:0 !important;
		margin-left:0 !important;
		padding-right:0 !important;
		padding-left:0 !important;
	}
}

@media only screen and (max-width: 600px){
	.with_frm_style .frm_form_field.frm_half.frm_left_container input:not([type=radio]):not([type=checkbox]),
	.with_frm_style .frm_form_field.frm_half.frm_left_container select,
	.with_frm_style .frm_form_field.frm_half.frm_left_container textarea,
	.with_frm_style .frm_form_field.frm_half.frm_left_container .frm_opt_container,
	.with_frm_style .frm_form_field.frm_half.frm_left_container.frm-g-recaptcha,
	.with_frm_style .frm_form_field.frm_half.frm_left_container.g-recaptcha,
	.with_frm_style .frm_form_field.frm_half.frm_left_container .chosen-container,
	.with_frm_style .frm_form_field.frm_half.frm_right_container input:not([type=radio]):not([type=checkbox]),
	.with_frm_style .frm_form_field.frm_half.frm_right_container select,
	.with_frm_style .frm_form_field.frm_half.frm_right_container textarea,
	.with_frm_style .frm_form_field.frm_half.frm_right_container .frm_opt_container,
	.with_frm_style .frm_form_field.frm_half.frm_right_container.frm-g-recaptcha,
	.with_frm_style .frm_form_field.frm_half.frm_right_container.g-recaptcha,
	.with_frm_style .frm_form_field.frm_half.frm_right_container .chosen-container{
		max-width:100% !important;
	}

	.with_frm_style .frm_form_field.frm_left_half.frm_left_container .frm_primary_label,
	.with_frm_style .frm_form_field.frm_right_half.frm_left_container .frm_primary_label,
	.with_frm_style .frm_form_field.frm_first_half.frm_left_container .frm_primary_label,
	.with_frm_style .frm_form_field.frm_last_half.frm_left_container .frm_primary_label,
	.with_frm_style .frm_form_field.frm_half.frm_left_container .frm_primary_label,
	.with_frm_style .frm_form_field.frm_left_half.frm_right_container .frm_primary_label,
	.with_frm_style .frm_form_field.frm_right_half.frm_right_container .frm_primary_label,
	.with_frm_style .frm_form_field.frm_first_half.frm_right_container .frm_primary_label,
	.with_frm_style .frm_form_field.frm_last_half.frm_right_container .frm_primary_label,
	.with_frm_style .frm_form_field.frm_half.frm_right_container .frm_primary_label{
		max-width:100% !important;
		margin-right:0;
		margin-left:0;
		padding-right:0;
		padding-left:0;
		width:100% !important;
	}


	.with_frm_style .frm_repeat_inline,
	.with_frm_style .frm_repeat_grid{
		margin: 20px 0;
	}

	.with_frm_style .frm_form_field.frm_first_half.frm_right_container div.frm_description,
	.with_frm_style .frm_form_field.frm_first_half.frm_right_container .frm_error,
	.with_frm_style .frm_form_field.frm_first_half .frm_right_container div.frm_description,
	.with_frm_style .frm_form_field.frm_first_half .frm_right_container .frm_error,
	.with_frm_style .frm_form_field.frm_last_half.frm_right_container div.frm_description,
	.with_frm_style .frm_form_field.frm_last_half.frm_right_container .frm_error,
	.with_frm_style .frm_form_field.frm_half.frm_right_container div.frm_description,
	.with_frm_style .frm_form_field.frm_half.frm_right_container .frm_error,
	.with_frm_style .frm_form_field.frm_first_half.frm_left_container div.frm_description,
	.with_frm_style .frm_form_field.frm_first_half.frm_left_container .frm_error,
	.with_frm_style .frm_form_field.frm_first_half .frm_left_container div.frm_description,
	.with_frm_style .frm_form_field.frm_first_half .frm_left_container .frm_error,
	.with_frm_style .frm_form_field.frm_last_half.frm_left_container div.frm_description,
	.with_frm_style .frm_form_field.frm_last_half.frm_left_container .frm_error,
	.with_frm_style .frm_form_field.frm_half.frm_left_container div.frm_description,
	.with_frm_style .frm_form_field.frm_half.frm_left_container .frm_error{
		margin-right:0;
		margin-left:0;
		padding-right:0;
		padding-left:0;
	}

	.frm_form_field.frm2,
	.frm_submit.frm2,
	.frm_form_field.frm3,
	.frm_submit.frm3,
	.frm_form_field.frm4,
	.frm_submit.frm4,
	.frm_form_field.frm6,
	.frm_submit.frm6,
	.frm_form_field.frm8,
	.frm_submit.frm8,
	.frm_form_field.frm9,
	.frm_submit.frm9,
	.frm_form_field.frm10,
	.frm_submit.frm10,
	.frm_form_field.frm_half,
	.frm_submit.frm_half,
    .frm_form_field.frm_left_half,
    .frm_form_field.frm_right_half,
    .frm_form_field.frm_first_half,
    .frm_form_field.frm_last_half,
    .frm_form_field.frm_first_third,
    .frm_form_field.frm_third,
	.frm_submit.frm_third,
    .frm_form_field.frm_last_third,
    .frm_form_field.frm_first_two_thirds,
	.frm_form_field.frm_last_two_thirds,
	.frm_form_field.frm_two_thirds,
    .frm_form_field.frm_left_fourth,
    .frm_form_field.frm_fourth,
	.frm_submit.frm_fourth,
    .frm_form_field.frm_right_fourth,
    .frm_form_field.frm_first_fourth,
	.frm_form_field.frm_last_fourth,
	.frm_form_field.frm_three_fourths,
	.frm_form_field.frm_fifth,
	.frm_submit.frm_fifth,
	.frm_form_field.frm_two_fifths,
	.frm_form_field.frm_three_fifths,
	.frm_form_field.frm_four_fifths,
	.frm_form_field.frm_sixth,
	.frm_submit.frm_sixth,
	.frm_form_field.frm_seventh,
	.frm_submit.frm_seventh,
	.frm_form_field.frm_eighth,
	.frm_submit.frm_eighth,
    .frm_form_field.frm_first_inline,
    .frm_form_field.frm_inline,
	.frm_submit.frm_inline,
    .frm_form_field.frm_last_inline{
        width:100%;
        margin-left:0;
        margin-right:0;
		clear:both;
        float:none;
    }

	.frm_form_field.frm_four_col .frm_radio,
	.frm_form_field.frm_four_col .frm_checkbox{
		width:48%;
	}

	.frm_form_field.frm_four_col .frm_radio:nth-child(2n+2),
	.frm_form_field.frm_four_col .frm_checkbox:nth-child(2n+2){
		margin-right:0;
	}
}