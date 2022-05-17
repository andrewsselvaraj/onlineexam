package com.onlineexam.service;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;

import com.onlineexam.model.User_details;
import com.onlineexam.repository.UserRepository;

public class UserServiceImpl implements UserService{

	@Autowired
    private UserRepository userRepository;
	@Override
	public List<User_details> fetchUserDetailsList() {
		// TODO Auto-generated method stub
		return userRepository.findAll();
	}

}
