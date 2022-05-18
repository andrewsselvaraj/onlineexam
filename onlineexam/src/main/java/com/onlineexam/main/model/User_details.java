package com.onlineexam.main.model;

import lombok.AllArgsConstructor;
import lombok.Builder;
import lombok.Data;
import lombok.NoArgsConstructor;
  
// Importing required classes 
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
  
@Entity
@Data
@NoArgsConstructor
@AllArgsConstructor
@Builder
  
// Class  
public class User_details {
  
    @Id
    private String user_id; 
    public String getUser_id() {
		return user_id;
	}
	public void setUser_id(String user_id) {
		this.user_id = user_id;
	}
	public String getUser_name() {
		return user_name;
	}
	public void setUser_name(String user_name) {
		this.user_name = user_name;
	}
	public String getUser_email() {
		return user_email;
	}
	public void setUser_email(String user_email) {
		this.user_email = user_email;
	}
	public String getUser_password() {
		return user_password;
	}
	public void setUser_password(String user_password) {
		this.user_password = user_password;
	}
	public String getUser_company_id() {
		return user_company_id;
	}
	public void setUser_company_id(String user_company_id) {
		this.user_company_id = user_company_id;
	}
	public String getUser_designation() {
		return user_designation;
	}
	public void setUser_designation(String user_designation) {
		this.user_designation = user_designation;
	}
	public String getUser_role() {
		return user_role;
	}
	public void setUser_role(String user_role) {
		this.user_role = user_role;
	}
	public String getUser_updated_by() {
		return user_updated_by;
	}
	public void setUser_updated_by(String user_updated_by) {
		this.user_updated_by = user_updated_by;
	}
	public String getUser_updated_date_time() {
		return user_updated_date_time;
	}
	public void setUser_updated_date_time(String user_updated_date_time) {
		this.user_updated_date_time = user_updated_date_time;
	}
	private String user_name;
    private String user_email; 
    private String user_password;
    private String user_company_id;
    private String user_designation;
    private String user_role; 
    private String user_updated_by;
    private String user_updated_date_time;
}
