USE `dbphp7`;
DROP procedure IF EXISTS `sp_usuarios_insert`;

CREATE PROCEDURE `sp_usuarios_insert` (
	pdeslogin VARCHAR(64),
	pdessenha VARCHAR(256)
)

BEGIN
	INSERT INTO `tb_usuarios_dois` (deslogin, dessenha) VALUES(pdeslogin, pdessenha);

	SELECT * FROM tb_usuarios_dois WHERE idusuario = LAST_INSERT_ID();

	#mysql_insert_id ()
END