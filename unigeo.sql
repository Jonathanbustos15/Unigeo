--
-- PostgreSQL database cluster dump
--

-- Started on 2019-09-21 11:11:27

SET default_transaction_read_only = off;

SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;

--
-- Roles
--

CREATE ROLE postgres;
ALTER ROLE postgres WITH SUPERUSER INHERIT CREATEROLE CREATEDB LOGIN REPLICATION BYPASSRLS PASSWORD 'md5a3556571e93b0d20722ba62be61e8c2d';






-- Completed on 2019-09-21 11:11:27

--
-- PostgreSQL database cluster dump complete
--

