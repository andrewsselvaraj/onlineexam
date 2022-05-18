package com.onlineexam.main.service;

import java.util.HashMap;
import java.util.List;
import java.util.Optional;

import com.onlineexam.main.model.User_details;

public interface UserService {
	List<User_details> fetchUserDetailsList();
	User_details findByUser_nameAndUser_password(String userName,String password);
	HashMap<String, String> getTokenAfterLogin(String userName,String password);
}
