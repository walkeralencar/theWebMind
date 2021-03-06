<?php
/**
 * This file is part of TheWebMind 3rd generation.
 * 
 * @author Felipe Nascimento de Moura <felipenmoura@gmail.com>
 * @license licenses/mind3rd.license
 */
namespace API;
/**
 * A facade class to deal with user's data.
 *
 * @author felipe
 */
class User{
    
    /**
     * Returns an array of all registered users.
     * @param boolean detailed If you want only the login, or the complete data from user
     * @return Array
     */
    public static function usersList($detailed=false)
    {
        return \MindUser::listUsers($detailed);
    }
    
    /**
     * Returns wether the user exists or not
     * @param string $userLogin The user login
     * @return boolean
     */
    public static function userExists($userLogin)
    {
        $usersList= \MindUser::listUsers(true);
        foreach($usersList as $user)
        {
            if($user['login'] == $userLogin)
                return $user;
        }
        return false;
    }
    
    /**
     * Loads the information about the specified user
     * @param string login
     * @return Array
     */
    public static function loadUserInfo($login)
    {
        return self::userExists($login);
    }
    
    /**
     * Gets the list of projects in which the current user is registered to work in.
     * @return Array
     */
    public static function projectsList()
    {
        return \MindProject::projectsList();
    }
    
    /**
     * Sets a property of the currend user.
     * 
     * If admin, you can pass the user to be changed.
     * This method actually changes AND PERSISTS the change to the
     * user's base.
     * 
     * @param String $attr
     * @param Mixed $value
     * @param Integer $user
     * @return boolean
     */
    public static function set($attr, $value, $user=false)
    {
        return \MindUser::set($attr, $value, $user);
    }
    
    public static function isAdmin()
    {
        return $_SESSION['type']== 'A';
    }
    
    public static function code()
    {
        return $_SESSION['pk_user'];
    }
}