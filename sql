<?xml version="1.0" encoding="utf-8" ?>
<!-- SQL XML created by WWW SQL Designer, https://github.com/ondras/wwwsqldesigner/ -->
<!-- Active URL: http://ondras.zarovi.cz/sql/demo/ -->
<sql>
<datatypes db="mysql">
	<group label="Numeric" color="rgb(238,238,170)">
		<type label="Integer" length="0" sql="INTEGER" quote=""/>
	 	<type label="TINYINT" length="0" sql="TINYINT" quote=""/>
	 	<type label="SMALLINT" length="0" sql="SMALLINT" quote=""/>
	 	<type label="MEDIUMINT" length="0" sql="MEDIUMINT" quote=""/>
	 	<type label="INT" length="0" sql="INT" quote=""/>
		<type label="BIGINT" length="0" sql="BIGINT" quote=""/>
		<type label="Decimal" length="1" sql="DECIMAL" re="DEC" quote=""/>
		<type label="Single precision" length="0" sql="FLOAT" quote=""/>
		<type label="Double precision" length="0" sql="DOUBLE" re="DOUBLE" quote=""/>
	</group>

	<group label="Character" color="rgb(255,200,200)">
		<type label="Char" length="1" sql="CHAR" quote="'"/>
		<type label="Varchar" length="1" sql="VARCHAR" quote="'"/>
		<type label="Text" length="0" sql="MEDIUMTEXT" re="TEXT" quote="'"/>
		<type label="Binary" length="1" sql="BINARY" quote="'"/>
		<type label="Varbinary" length="1" sql="VARBINARY" quote="'"/>
		<type label="BLOB" length="0" sql="BLOB" re="BLOB" quote="'"/>
	</group>

	<group label="Date &amp; Time" color="rgb(200,255,200)">
		<type label="Date" length="0" sql="DATE" quote="'"/>
		<type label="Time" length="0" sql="TIME" quote="'"/>
		<type label="Datetime" length="0" sql="DATETIME" quote="'"/>
		<type label="Year" length="0" sql="YEAR" quote=""/>
		<type label="Timestamp" length="0" sql="TIMESTAMP" quote="'"/>
	</group>

	<group label="Miscellaneous" color="rgb(200,200,255)">
		<type label="ENUM" length="1" sql="ENUM" quote=""/>
		<type label="SET" length="1" sql="SET" quote=""/>
		<type label="Bit" length="0" sql="bit" quote=""/>
	</group>
</datatypes><table x="371" y="15" name="users">
<row name="id" null="1" autoincrement="1">
<datatype>INTEGER</datatype>
<default>NULL</default></row>
<row name="name" null="1" autoincrement="0">
<datatype>VARCHAR(100)</datatype>
<default>NULL</default></row>
<row name="second_name" null="1" autoincrement="0">
<datatype>VARCHAR(100)</datatype>
<default>NULL</default></row>
<row name="phone_number" null="1" autoincrement="0">
<datatype>VARCHAR(30)</datatype>
<default>NULL</default></row>
<row name="email" null="1" autoincrement="0">
<datatype>VARCHAR(100)</datatype>
<default>NULL</default></row>
<row name="password" null="1" autoincrement="0">
<datatype>VARCHAR(50)</datatype>
<default>NULL</default></row>
<row name="remember_token" null="1" autoincrement="0">
<datatype>MEDIUMTEXT</datatype>
<default>NULL</default></row>
<row name="firm_name" null="1" autoincrement="0">
<datatype>VARCHAR(100)</datatype>
<default>NULL</default></row>
<row name="address" null="1" autoincrement="0">
<datatype>MEDIUMTEXT(100)</datatype>
<default>NULL</default></row>
<row name="second_address" null="1" autoincrement="0">
<datatype>MEDIUMTEXT(100)</datatype>
<default>NULL</default></row>
<row name="postal" null="1" autoincrement="0">
<datatype>MEDIUMTEXT(20)</datatype>
<default>NULL</default></row>
<row name="city" null="1" autoincrement="0">
<datatype>VARCHAR(100)</datatype>
<default>NULL</default></row>
<row name="country" null="1" autoincrement="0">
<datatype>VARCHAR(100)</datatype>
<default>NULL</default></row>
<row name="experience" null="1" autoincrement="0">
<datatype>INTEGER</datatype>
<default>NULL</default></row>
<row name="uk_work" null="1" autoincrement="0">
<datatype>INTEGER</datatype>
<default>NULL</default></row>
<row name="english_level" null="1" autoincrement="0">
<datatype>VARCHAR(100)</datatype>
<default>NULL</default></row>
<row name="comment" null="1" autoincrement="0">
<datatype>MEDIUMTEXT</datatype>
<default>NULL</default></row>
<row name="photo" null="1" autoincrement="0">
<datatype>MEDIUMTEXT</datatype>
<default>NULL</default></row>
<row name="points" null="1" autoincrement="0">
<datatype>INTEGER</datatype>
<default>NULL</default></row>
<row name="is_active" null="1" autoincrement="0">
<datatype>BINARY</datatype>
<default>NULL</default></row>
<row name="rating" null="1" autoincrement="0">
<datatype>DOUBLE</datatype>
<default>NULL</default></row>
<key type="PRIMARY" name="">
<part>id</part>
</key>
</table>
<table x="1099" y="113" name="skills">
<row name="id" null="1" autoincrement="1">
<datatype>INTEGER</datatype>
<default>NULL</default></row>
<row name="specialization_id" null="1" autoincrement="0">
<datatype>INTEGER</datatype>
<default>NULL</default></row>
<row name="skill_name" null="1" autoincrement="0">
<datatype>VARCHAR(100)</datatype>
<default>NULL</default></row>
<row name="custom_skill" null="1" autoincrement="0">
<datatype>BINARY</datatype>
<default>NULL</default></row>
<row name="lang_id" null="1" autoincrement="0">
<datatype>INTEGER</datatype>
<default>NULL</default></row>
<row name="main_skill" null="1" autoincrement="0">
<datatype>BINARY</datatype>
<default>NULL</default></row>
<key type="PRIMARY" name="">
<part>id</part>
</key>
</table>
<table x="118" y="46" name="users-features">
<row name="id" null="1" autoincrement="1">
<datatype>INTEGER</datatype>
<default>NULL</default></row>
<row name="user_id" null="1" autoincrement="0">
<datatype>INTEGER</datatype>
<default>NULL</default><relation table="users" row="id" />
</row>
<row name="insurance_number" null="1" autoincrement="0">
<datatype>BINARY</datatype>
<default>NULL</default></row>
<row name="utr" null="1" autoincrement="0">
<datatype>BINARY</datatype>
<default>NULL</default></row>
<row name="bank_account" null="1" autoincrement="0">
<datatype>BINARY</datatype>
<default>NULL</default></row>
<row name="own_tools" null="1" autoincrement="0">
<datatype>BINARY</datatype>
<default>NULL</default></row>
<row name="own_car" null="1" autoincrement="0">
<datatype>BINARY</datatype>
<default>NULL</default></row>
<row name="own_van" null="1" autoincrement="0">
<datatype>BINARY</datatype>
<default>NULL</default></row>
<row name="cscs" null="1" autoincrement="0">
<datatype>BINARY</datatype>
<default>NULL</default></row>
<row name="gas_safe" null="1" autoincrement="0">
<datatype>BINARY</datatype>
<default>NULL</default></row>
<row name="edition" null="1" autoincrement="0">
<datatype>BINARY</datatype>
<default>NULL</default></row>
<key type="PRIMARY" name="">
<part>id</part>
</key>
</table>
<table x="119" y="343" name="work-history">
<row name="id" null="1" autoincrement="1">
<datatype>INTEGER</datatype>
<default>NULL</default></row>
<row name="user_id" null="1" autoincrement="0">
<datatype>INTEGER</datatype>
<default>NULL</default><relation table="users" row="id" />
</row>
<row name="history_firm_name" null="1" autoincrement="0">
<datatype>VARCHAR(100)</datatype>
<default>NULL</default></row>
<row name="history_years" null="1" autoincrement="0">
<datatype>INTEGER</datatype>
<default>NULL</default></row>
<row name="history_months" null="1" autoincrement="0">
<datatype>INTEGER</datatype>
<default>NULL</default></row>
<key type="PRIMARY" name="">
<part>id</part>
</key>
</table>
<table x="872" y="156" name="user-skill">
<row name="id" null="1" autoincrement="1">
<datatype>INTEGER</datatype>
<default>NULL</default></row>
<row name="user_id" null="1" autoincrement="0">
<datatype>INTEGER</datatype>
<default>NULL</default><relation table="users" row="id" />
</row>
<row name="skill_id" null="1" autoincrement="0">
<datatype>INTEGER</datatype>
<default>NULL</default><relation table="skills" row="id" />
</row>
<key type="PRIMARY" name="">
<part>id</part>
</key>
</table>
<table x="641" y="395" name="job-posts">
<row name="id" null="1" autoincrement="1">
<datatype>INTEGER</datatype>
<default>NULL</default></row>
<row name="user_id" null="1" autoincrement="0">
<datatype>INTEGER</datatype>
<default>NULL</default><relation table="users" row="id" />
</row>
<row name="specialization_id" null="1" autoincrement="0">
<datatype>INTEGER</datatype>
<default>NULL</default></row>
<row name="job_name" null="1" autoincrement="0">
<datatype>VARCHAR(200)</datatype>
<default>NULL</default></row>
<row name="job_experience_time" null="1" autoincrement="0">
<datatype>INTEGER</datatype>
<default>NULL</default></row>
<row name="job_uk_work" null="1" autoincrement="0">
<datatype>INTEGER</datatype>
<default>NULL</default></row>
<row name="hour_payment" null="1" autoincrement="0">
<datatype>DOUBLE</datatype>
<default>NULL</default></row>
<row name="day_payment" null="1" autoincrement="0">
<datatype>DOUBLE</datatype>
<default>NULL</default></row>
<row name="unknown_payment" null="1" autoincrement="0">
<datatype>BINARY</datatype>
<default>NULL</default></row>
<row name="static_payment" null="1" autoincrement="0">
<datatype>DOUBLE</datatype>
<default>NULL</default></row>
<row name="comment_first" null="1" autoincrement="0">
<datatype>MEDIUMTEXT</datatype>
<default>NULL</default></row>
<row name="job_link" null="1" autoincrement="0">
<datatype>VARCHAR(100)</datatype>
<default>NULL</default></row>
<row name="created_date" null="1" autoincrement="0">
<datatype>DATE</datatype>
<default>NULL</default></row>
<key type="PRIMARY" name="">
<part>id</part>
</key>
</table>
<table x="871" y="321" name="job-skills">
<row name="id" null="1" autoincrement="1">
<datatype>INTEGER</datatype>
<default>NULL</default></row>
<row name="job_id" null="1" autoincrement="0">
<datatype>INTEGER</datatype>
<default>NULL</default><relation table="job-posts" row="id" />
</row>
<row name="skill_id" null="1" autoincrement="0">
<datatype>INTEGER</datatype>
<default>NULL</default><relation table="skills" row="id" />
</row>
<key type="PRIMARY" name="">
<part>id</part>
</key>
</table>
<table x="370" y="547" name="job-features">
<row name="id" null="1" autoincrement="1">
<datatype>INTEGER</datatype>
<default>NULL</default></row>
<row name="job_id" null="1" autoincrement="0">
<datatype>INTEGER</datatype>
<default>NULL</default><relation table="job-posts" row="id" />
</row>
<row name="job_insurance_number" null="1" autoincrement="0">
<datatype>BINARY</datatype>
<default>NULL</default></row>
<row name="job_utr" null="1" autoincrement="0">
<datatype>BINARY</datatype>
<default>NULL</default></row>
<row name="job_bank_account" null="1" autoincrement="0">
<datatype>BINARY</datatype>
<default>NULL</default></row>
<row name="job_own_tools" null="1" autoincrement="0">
<datatype>BINARY</datatype>
<default>NULL</default></row>
<row name="job_own_car" null="1" autoincrement="0">
<datatype>BINARY</datatype>
<default>NULL</default></row>
<row name="job_own_van" null="1" autoincrement="0">
<datatype>BINARY</datatype>
<default>NULL</default></row>
<row name="job_cscs" null="1" autoincrement="0">
<datatype>BINARY</datatype>
<default>NULL</default></row>
<row name="job_gas_safe" null="1" autoincrement="0">
<datatype>BINARY</datatype>
<default>NULL</default></row>
<row name="job_edition" null="1" autoincrement="0">
<datatype>BINARY</datatype>
<default>NULL</default></row>
<key type="PRIMARY" name="">
<part>id</part>
</key>
</table>
<table x="1098" y="351" name="job-type">
<row name="id" null="1" autoincrement="1">
<datatype>INTEGER</datatype>
<default>NULL</default></row>
<row name="job_type_name" null="1" autoincrement="0">
<datatype>VARCHAR(100)</datatype>
<default>NULL</default></row>
<row name="lang_id" null="1" autoincrement="0">
<datatype>INTEGER</datatype>
<default>NULL</default></row>
<key type="PRIMARY" name="">
<part>id</part>
</key>
</table>
<table x="871" y="431" name="job-post-type">
<row name="id" null="1" autoincrement="1">
<datatype>INTEGER</datatype>
<default>NULL</default></row>
<row name="job_id" null="1" autoincrement="0">
<datatype>INTEGER</datatype>
<default>NULL</default><relation table="job-posts" row="id" />
</row>
<row name="job_type_id" null="1" autoincrement="0">
<datatype>INTEGER</datatype>
<default>NULL</default><relation table="job-type" row="id" />
</row>
<key type="PRIMARY" name="">
<part>id</part>
</key>
</table>
<table x="1100" y="500" name="job-time">
<row name="id" null="1" autoincrement="1">
<datatype>INTEGER</datatype>
<default>NULL</default></row>
<row name="job_time_name" null="1" autoincrement="0">
<datatype>VARCHAR(100)</datatype>
<default>NULL</default></row>
<row name="lang_id" null="1" autoincrement="0">
<datatype>INTEGER</datatype>
<default>NULL</default></row>
<key type="PRIMARY" name="">
<part>id</part>
</key>
</table>
<table x="871" y="554" name="job-post-time">
<row name="id" null="1" autoincrement="1">
<datatype>INTEGER</datatype>
<default>NULL</default></row>
<row name="job_id" null="1" autoincrement="0">
<datatype>INTEGER</datatype>
<default>NULL</default><relation table="job-posts" row="id" />
</row>
<row name="job_time_id" null="1" autoincrement="0">
<datatype>INTEGER</datatype>
<default>NULL</default><relation table="job-time" row="id" />
</row>
<key type="PRIMARY" name="">
<part>id</part>
</key>
</table>
</sql>
