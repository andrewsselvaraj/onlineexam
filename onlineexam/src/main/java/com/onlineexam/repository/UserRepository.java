package com.onlineexam.repository;

import org.springframework.data.jpa.repository.JpaRepository;

import com.onlineexam.model.UserInformation;

public interface UserRepository
extends JpaRepository<UserInformation, String> {
}
