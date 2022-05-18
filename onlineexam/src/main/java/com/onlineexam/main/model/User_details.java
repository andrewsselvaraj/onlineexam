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
    private String user_name;
    private String user_email; 
    private String user_password;
    private String user_company_id;
    private String user_designation;
    private String user_role; 
    private String user_updated_by;
    private String user_updated_date_time;
}
