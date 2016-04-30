create database if not exists dbAsint character set utf8 collate utf8_unicode_ci;
use dbAsint;

grant all privileges on dbAsint.* to 'dbAsint_user'@'localhost' identified by 'secret';

