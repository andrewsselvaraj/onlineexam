package com.onlineexam.main.service;

import java.util.List;
import java.util.Optional;

import com.onlineexam.main.model.User_details;

public interface UserService {
	List<User_details> fetchUserDetailsList();
	Optional<User_details> findByUser_nameAndUser_password(String userName,String password);
}
