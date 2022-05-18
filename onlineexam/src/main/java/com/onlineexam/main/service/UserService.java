package com.onlineexam.main.service;

import java.util.List;

import com.onlineexam.main.model.User_details;

public interface UserService {
	List<User_details> fetchUserDetailsList();
}
