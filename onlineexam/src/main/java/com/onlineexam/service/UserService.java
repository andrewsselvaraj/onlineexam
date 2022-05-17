package com.onlineexam.service;

import java.util.List;

import com.onlineexam.model.UserInformation;

public interface UserService {
	List<UserInformation> fetchUserDetailsList();
}
