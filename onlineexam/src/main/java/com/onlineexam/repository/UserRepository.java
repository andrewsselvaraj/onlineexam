package com.onlineexam.repository;

import org.springframework.data.jpa.repository.JpaRepository;

import com.onlineexam.model.User_details;

public interface UserRepository
extends JpaRepository<User_details, String> {
}
