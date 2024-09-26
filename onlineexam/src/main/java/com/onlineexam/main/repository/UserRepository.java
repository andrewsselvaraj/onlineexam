package com.onlineexam.main.repository;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.onlineexam.main.model.User_details;

@Repository
public interface UserRepository extends JpaRepository<User_details, String> {

	User_details findByUser_id(String userid);
	
}
