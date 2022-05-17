package com.onlineexam.service;

import java.util.List;

import com.onlineexam.model.User_details;

public interface UserService {
	List<User_details> fetchUserDetailsList();
}
