<?php
/* $Id$ */

$charset = 'iso-8859-1';
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab');
$month = array('Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic');
// Ver http://www.php.net/manual/es/function.strftime.php para definir
// la variable siguiente
$datefmt = '%d-%m-%Y a las %H:%M:%S';

$strAPrimaryKey = 'Se a�adi� una clave primaria en %s';
$strAccessDenied = 'Acceso denegado ';
$strAction = 'Acci�n';
$strAddDeleteColumn = 'A�adir/borrar columna de criterio';
$strAddDeleteRow = 'A�adir/borrar fila de criterio';
$strAddNewField = 'Insertar nuevo campo';
$strAddPriv = 'Agregar nuevo privilegio';
$strAddPrivMessage = 'Ud. ha a�adido un nuevo privilegio.';
$strAddSearchConditions = 'Insertar las condiciones de b�squeda (cuerpo de la cl�usula "where"):';
$strAddToIndex = 'A�adido al �ndice &nbsp;%s&nbsp;columna(s)';
$strAddUser = 'Agregar nuevo usuario';
$strAddUserMessage = 'Ud. ha agregado un nuevo usuario.';
$strAffectedRows = 'Filas afectadas: ';
$strAfter = 'Despu�s de %s';
$strAfterInsertBack = 'Volver';
$strAfterInsertNewInsert = 'Insertar un nuevo registro';
$strAll = 'Todos/as';
$strAllTableSameWidth = '�Mostrar todas las tablas que tienen el mismo ancho?';
$strAlterOrderBy = 'Modificar el "Order By" de la tabla';
$strAnIndex = 'Se a�adi� un �ndice en %s';
$strAnalyzeTable = 'Analizar tabla';
$strAnd = 'Y';
$strAny = 'cualquiera';
$strAnyColumn = 'Cualquier columna';
$strAnyDatabase = 'Cualquier base de datos';
$strAnyHost = 'Cualquier servidor';
$strAnyTable = 'Cualquier tabla';
$strAnyUser = 'Cualquier usuario';
$strAscending = 'Ascendente';
$strAtBeginningOfTable = 'Al comienzo de la tabla';
$strAtEndOfTable = 'Al final de la tabla';
$strAttr = 'Atributos';

$strBack = 'Volver';
$strBeginCut = 'INICIO DEL CORTE';
$strBeginRaw = 'INICIO DEL VOLCADO';
$strBinary = ' Binario ';
$strBinaryDoNotEdit = ' Binario - �no editar! ';
$strBookmarkDeleted = 'El "bookmark" ha sido borrado.';
$strBookmarkLabel = 'Etiqueta';
$strBookmarkQuery = 'Consulta guardada en favoritos';
$strBookmarkThis = 'Guardar esta consulta en favoritos';
$strBookmarkView = 'Solamente ver';
$strBrowse = 'Examinar';
$strBzip = '"Comprimido con bzip"';

$strCannotLogin = 'No se consigui� hacer login al servidor MySQL';
$strCantLoadMySQL = 'imposible cargar la extensi�n MySQL,<br />por favor revise la configuraci�n de PHP.';
$strCantLoadRecodeIconv = 'No se puede cargar iconv o recodificar una extensi�n necesaria para la conversi�n de juegos de caracteres, configure php para permitir el uso de estas extensiones o desactive la conversi�n de juegos de caracteres en phpMyAdmin.';
$strCantRenameIdxToPrimary = 'No puede cambiar el nombre del �ndice a �PRIMARY!';
$strCantUseRecodeIconv = 'No se puede utilizar iconv ni libiconv ni la funci�n recode_string mientras se carga la extensi�n de informes. Comprueba la configuraci�n de php.';
$strCardinality = 'Cardinalidad';
$strCarriage = 'Retorno de carro: \\r';
$strChange = 'Cambiar';
$strChangeDisplay = 'Elija el campo a mostrar';
$strChangePassword = 'Cambio de contrase�a';
$strCharsetOfFile = 'Codificaci�n de los caracteres del archivo:';
$strCheckAll = 'Revisar todos/as';
$strCheckDbPriv = 'Revisar privilegios de la base de datos';
$strCheckTable = 'Revisar tabla';
$strChoosePage = 'Elija la p�gina a editar';
$strColComFeat = 'Mostrando los comentarios de la columna';
$strColumn = 'Columna';
$strColumnNames = 'Nombre de las columnas';
$strComments = 'Comentarios';
$strCompleteInserts = 'Completar los "Inserts"';
$strCompression = 'Compresi�n';
$strConfigFileError = '�phpMyAdmin no puede leer el fichero de configuraci�n!<br />Esto puede suceder si php encuentra un error sint�ctico en �l o bien php no puede encontrar el fichero.<br />Intente acceder al fichero de configuraci�n directamente mediante el siguiente enlace y compruebe el(los) mensaje(s) de error que reciba. En muchas ocasiones falta una coma o punto y coma en alg�n sitio.<br />Si recibe una p�gina en blanco, todo est� correcto.';
$strConfigureTableCoord = 'Configure las coordenadas para la tabla %s';
$strConfirm = '�Realmente quiere hacerlo?';
$strCookiesRequired = 'Las "cookies" deben estar habilitadas pasado este punto.';
$strCopyTable = 'Copiar la tabla a (base de datos<b>.</b>tabla):';
$strCopyTableOK = 'La tabla %s se copi� a %s.';
$strCreate = 'Crear';
$strCreateIndex = 'Crear un �ndice en&nbsp;%s&nbsp;columnas';
$strCreateIndexTopic = 'Crear un nuevo �ndice';
$strCreateNewDatabase = 'Crear nueva base de datos';
$strCreateNewTable = 'Crear nueva tabla en base de datos %s';
$strCreatePage = 'Crear una nueva p�gina';
$strCreatePdfFeat = 'Creaci�n de los PDF';
$strCriteria = 'Criterio';

$strData = 'Datos';
$strDataDict = 'Diccionario Datos';
$strDataOnly = 'Solamente datos';
$strDatabase = 'Base de datos ';
$strDatabaseHasBeenDropped = 'La base de datos %s ha sido eliminada.';
$strDatabaseWildcard = 'Bases de datos (se permiten comodines):';
$strDatabases = 'Bases de datos';
$strDatabasesStats = 'Estad�sticas de la base';
$strDefault = 'Predeterminado';
$strDelete = 'Borrar';
$strDeleteFailed = '�La operaci�n de borrado fall�!';
$strDeleteUserMessage = 'Ud. ha borrado el usuario %s.';
$strDeleted = 'La fila se ha borrado';
$strDeletedRows = 'Filas borradas: ';
$strDescending = 'Descendente';
$strDisabled = 'Deshabilitado';
$strDisplay = 'Mostrar';
$strDisplayFeat = 'Mostrar los componentes';  //Features = �componentes?
$strDisplayOrder = 'Mostrar en este orden:';
$strDisplayPDF = 'Mostrar esquema PDF';
$strDoAQuery = 'Hacer una consulta (comod�n: "%")';
$strDoYouReally = 'Realmente desea ';
$strDocu = 'Documentaci�n';
$strDrop = 'Eliminar';
$strDropDB = 'Eliminar la base de datos %s';
$strDropTable = 'Borrar la tabla';
$strDumpXRows = 'Volcar %s filas empezando por la fila %s.';
$strDumpingData = 'Volcar la base de datos para la tabla';
$strDynamic = 'din�mico/a';

$strEdit = 'Editar';
$strEditPDFPages = 'Editar las p�ginas PDF';
$strEditPrivileges = 'Editar los privilegios';
$strEffective = 'Efectivo/a';
$strEmpty = 'Vaciar';
$strEmptyResultSet = 'MySQL ha devuelto un valor vac�o (i.e. cero columnas).';
$strEnabled = 'Habilitado';
$strEnd = 'Fin';
$strEndCut = 'FIN DEL CORTE';
$strEndRaw = 'FIN DEL VOLCADO';
$strEnglishPrivileges = ' Nota: Los nombres de los privilegios de MySQL est�n expresados en ingl�s ';
$strError = 'Error';
$strExplain = 'Explicar el SQL';
$strExport = 'Exportar';
$strExportToXML = 'Exportar a formato XML';
$strExtendedInserts = '"Inserts" extendidos';
$strExtra = 'Extra';

$strField = 'Campo';
$strFieldHasBeenDropped = 'Se elimin� el campo %s';
$strFields = 'Campos';
$strFieldsEmpty = 'El n�mero de campos est� �vac�o!';
$strFieldsEnclosedBy = 'Campos encerrados por';
$strFieldsEscapedBy = 'Campos escapados por';
$strFieldsTerminatedBy = 'Campos terminados en';
$strFixed = 'fijo';
$strFlushTable = 'Vaciar el cach� de la tabla ("FLUSH")';
$strFormEmpty = '�Falta un valor en el formulario!';
$strFormat = 'Formato';
$strFullText = 'Textos completos';
$strFunction = 'Funci�n';

$strGenBy = 'Generado por';
$strGenTime = 'Tiempo de generaci�n';
$strGeneralRelationFeat = 'Componentes de relaci�n general';  //Features = �componentes?
$strGo = 'Contin�e';
$strGrants = 'Permisos';
$strGzip = '"Comprimido con gzip"';

$strHasBeenAltered = 'se modific�.';
$strHasBeenCreated = 'se cre�.';
$strHaveToShow = 'Debe elegir al menos una columna para mostrar';
$strHome = 'P�gina de inicio';
$strHomepageOfficial = 'P�gina oficial de phpMyAdmin';
$strHomepageSourceforge = 'Descargar phpMyAdmin de Sourceforge';
$strHost = 'servidor';
$strHostEmpty = '��El nombre del servidor est� vac�o!!';

$strIdxFulltext = 'Texto completo';
$strIfYouWish = 'Si desea cargar solamente una de las columnas de la tabla, especif�quelo, separando los campos con una coma.';
$strIgnore = 'Ignorar';
$strImportDocSQL = 'Importar archivos docSQL';
$strInUse = 'en uso';
$strIndex = '�ndice';
$strIndexHasBeenDropped = 'El �ndice %s ha sido eliminado';
$strIndexName = 'Nombre del �ndice&nbsp;:';
$strIndexType = 'Tipo de �ndice&nbsp;:';
$strIndexes = '�ndices';
$strInsecureMySQL = 'Su archivo de configuraci�n contiene par�metros (root sin contrase�a) que corresponden a la cuenta privilegiada predeterminada de MySQL. Su servidor de MySQL est� usando estos valores, que constituyen una vulnerabilidad.  Se le recomienda corregir esta brecha de seguridad.';
$strInsert = 'Insertar';
$strInsertAsNewRow = 'Insertar como una nueva fila';
$strInsertNewRow = 'Insertar nueva fila';
$strInsertTextfiles = 'Insertar archivo de texto en la tabla';
$strInsertedRows = 'Filas insertadas:';
$strInstructions = 'Instrucciones';
$strInvalidName = '"%s" es una palabra reservada, no puede usarla como nombre de /Base de datos/tabla/campo.';

$strKeepPass = 'No cambiar la contrase�a';
$strKeyname = 'Nombre de la clave';
$strKill = 'Matar el proceso';

$strLandscape = 'Orientaci�n horizontal';
$strLength = 'Longitud';
$strLengthSet = 'Longitud/Valores*';
$strLimitNumRows = 'registros por p�gina';
$strLineFeed = 'Retorno de carro: \\n';
$strLines = 'L�neas';
$strLinesTerminatedBy = 'L�neas terminadas en';
$strLinkNotFound = 'Enlace no encontrado';
$strLinksTo = 'Enlaces a';
$strLocationTextfile = 'Localizaci�n del archivo de texto';
$strLogPassword = 'Contrase�a:';
$strLogUsername = 'Usuario:';
$strLogin = 'Identificaci�n';
$strLogout = 'Salir';

$strMissingBracket = 'Falta una llave (\{ o \})';
$strModifications = 'Se han guardado las modificaciones';
$strModify = 'Modificar';
$strModifyIndexTopic = 'Modificar un �ndice';
$strMoveTable = 'Mover tabla a (Base de datos<b>.</b>tabla):';
$strMoveTableOK = 'La tabla %s ha sido movida a %s.';
$strMySQLCharset = 'Juegos de caracteres de MySQL';
$strMySQLReloaded = 'Reinicio de MySQL.';
$strMySQLSaid = 'MySQL ha dicho: ';
$strMySQLServerProcess = 'MySQL %pma_s1% ejecut�ndose en %pma_s2% como %pma_s3%';
$strMySQLShowProcess = 'Mostrar procesos';
$strMySQLShowStatus = 'Mostrar informaci�n de marcha de MySQL';
$strMySQLShowVars = 'Mostrar las variables del sistema MySQL';

$strName = 'Nombre';
$strNext = 'Pr�xima';
$strNo = 'No';
$strNoDatabases = 'No hay bases de datos';
$strNoDescription = 'Sin descripci�n';
$strNoDropDatabases = '"DROP DATABASE" los enunciados ("sentences") est�n deshabilitados.';
$strNoExplain = 'Saltarse la explicaci�n del SQL';
$strNoFrames = 'phpMyAdmin funciona mejor con un navegador que <b>soporte marcos (frames)</b>.';
$strNoIndex = '�No se ha definido el �ndice!';
$strNoIndexPartsDefined = '�No se han definido las partes del �ndice!';
$strNoModification = 'Sin cambios';
$strNoPassword = 'Sin contrase�a';
$strNoPhp = 'Sin c�digo PHP';
$strNoPrivileges = 'Sin privilegios';
$strNoRights = '�Usted no tiene suficientes privilegios para estar aqu� ahora!';
$strNoTablesFound = 'No se han encontrado tablas en la base de datos.';
$strNoUsersFound = 'Usuario(s) no encontrado(s).';
$strNoValidateSQL = 'Saltarse la validaci�n del SQL';
$strNone = 'Ninguna';
$strNotNumber = '��sto no es un n�mero!';
$strNotOK = 'no recibi� el OK';
$strNotSet = 'Tabla <b>%s</b> no encontrada o no definida en %s';
$strNotValidNumber = '�no es un n�mero de fila v�lido!';
$strNull = 'Nulo';
$strNumSearchResultsInTable = '%s resultado(s) en la tabla <i>%s</i>';
$strNumSearchResultsTotal = '<b>Total:</b> <i>%s</i> resultado(s)';
$strNumTables = 'Tablas';

$strOK = 'OK';
$strOftenQuotation = 'A menudo son comillas. OPCIONALMENTE significa que �nicamente los campos char y varchar est�n encerrados por el caracter "comillas".';
$strOperations = 'Operaciones';
$strOptimizeTable = 'Optimizar la tabla';
$strOptionalControls = 'Es opcional. Controla el modo de escribir o leer caracteres especiales.';
$strOptionally = 'OPCIONALMENTE';
$strOptions = 'Opciones';
$strOr = 'O';
$strOverhead = 'Residuo a depurar';

$strPHP40203 = 'Usted est� usando PHP 4.2.3, el cual tiene un error de codificaci�n en cuanto a los "strings multi-byte" (mbstring). Lea el reporte 19404 de PHP. Esta versi�n de PHP no est� recomendada para ser usada con phpMyAdmin.';
$strPHPVersion = 'Versi�n de PHP';
$strPageNumber = 'N�mero de p�gina:';
$strPartialText = 'Textos parciales';
$strPassword = 'Contrase�a';
$strPasswordEmpty = '�La contrase�a est� vac�a!';
$strPasswordNotSame = '�Las contrase�as no coinciden!';
$strPdfDbSchema = 'Esquema de la base de datos "%s" - P�gina %s';
$strPdfInvalidPageNum = '�No se ha definido el n�mero de p�gina PDF!';
$strPdfInvalidTblName = '�La tabla "%s" no existe!';
$strPdfNoTables = 'No existen tablas';
$strPhp = 'Crear c�digo PHP';
$strPmaDocumentation = 'Documentaci�n de phpMyAdmin';
$strPmaUriError = 'La directiva <tt>$cfg[\'PmaAbsoluteUri\']</tt> �DEBE constar en el fichero de configuraci�n!';
$strPortrait = 'Orientaci�n vertical';
$strPos1 = 'Empezar';
$strPrevious = 'Previo';
$strPrimary = 'Primaria';
$strPrimaryKey = 'Clave Primaria';
$strPrimaryKeyHasBeenDropped = 'La clave primaria ha sido eliminada';
$strPrimaryKeyName = 'El nombre de la clave primaria debe ser... �PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>debe</b> ser el nombre de y <b>�nicamente de</b> �una clave primaria!)';
$strPrint = 'Imprimir';
$strPrintView = 'Vista de impresi�n';
$strPrivDescMaxConnections = 'Limits the number of new connections the user may open per hour.';
$strPrivDescMaxQuestions = 'Limits the number of queries the user may send to the server per hour.';
$strPrivDescMaxUpdates = 'Limits the number of commands that change any table or database the user may execute per hour.';
$strPrivileges = 'Privilegios';
$strProperties = 'Propiedades';
$strPutColNames = 'Ponga los nombres de campo en la primera hilera';

$strQBE = 'Generar una consulta';
$strQBEDel = 'Borrar';
$strQBEIns = 'Insertar';
$strQueryOnDb = 'Consulta a la base de datos <b>%s</b>:';
$strQueryStatistics = '<b>Query statistics</b>: Since its startup, %s queries have been sent to the server.';

$strReType = 'Re-escriba';
$strRecords = 'Registros';
$strReferentialIntegrity = 'Compruebe la integridad referencial:';
$strRelationNotWorking = 'Los componentes adicionales para trabajar con tablas vinculadas fueron desactivados. Para saber porqu�, d� clic %saqu�%s.';  //Features = �componentes?
$strRelationView = 'Vista de relaciones';
$strRelationalSchema = 'Esquema relacionado';
$strReloadFailed = 'El reinicio de MySQL ha fallado.';
$strReloadMySQL = 'Reinicio de MySQL';
$strRememberReload = 'Recuerde reiniciar el servidor.';
$strRenameTable = 'Cambiar el nombre de la tabla a';
$strRenameTableOK = 'Tabla %s ahora se llama %s';
$strRepairTable = 'Reparar la tabla';
$strReplace = 'Reemplazar';
$strReplaceTable = 'Reemplazar los datos de la tabla con archivo';
$strReset = 'Reset';
$strRevoke = 'Revocar';
$strRevokeGrant = 'Revocar privilegios "Grant"';
$strRevokeGrantMessage = 'Ud. ha revocado el privilegio "Grant" para %s';
$strRevokeMessage = 'Ud. ha revocado los privilegios para %s';
$strRevokePriv = 'Revocar los privilegios';
$strRowLength = 'Longitud de la fila';
$strRowSize = ' Tama�o de la fila ';
$strRows = 'Filas';
$strRowsFrom = 'filas empezando de';
$strRowsModeHorizontal = 'horizontal';
$strRowsModeOptions = 'en modo %s y repite encabezados cada %s celdas';
$strRowsModeVertical = 'vertical';
$strRowsStatistic = 'Estad�sticas de la fila';
$strRunQuery = 'Ejecutar la consulta';
$strRunSQLQuery = 'Ejecute la/s consulta/s SQL en la base de datos %s';
$strRunning = 'ejecut�ndose en %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = 'Hay la posibilidad de que usted haya encontrado un error en el int�rprete de SQL. Por favor examine cuidadosamente su consulta, y verifique que las comillas son usadas adecuadamente y hacen juego. Otra posible causa del fallo es que usted este subiendo un archivo con datos binarios por fuera del �rea de texto delimitado. Intente su consulta en la interfaz de comandos de MySQL. La salida generada por el servidor de MySQL, de existir, aparece abajo, en cuyo caso puede ayudar a diagnosticar el problema. Si a�n tiene problemas o el int�rprete falla en tanto que en la interfaz de comandos funciona, por favor reduzca la salida de su consulta de SQL a la consulta que genera el problema, y env�e un reporte de error con la cadena de datos en la secci�n de CORTE indicada abajo:';
$strSQLParserUserError = 'Parece haber un error en su consulta de SQL. La salida generada por el servidor de MySQL, de existir, aparece abajo, en cuyo caso puede ayudar a diagnosticar el problema.';
$strSQLQuery = 'consulta SQL';
$strSQLResult = 'Resultado SQL';
$strSQPBugInvalidIdentifer = 'El identificador no es v�lido';
$strSQPBugUnclosedQuote = 'Comillas sin cerrar';
$strSQPBugUnknownPunctuation = 'Signo de puntuaci�n desconocido';
$strSave = 'Grabar';
$strScaleFactorSmall = 'El factor de la escala es demasiado peque�o para poner el esquema en una p�gina';
$strSearch = 'Buscar';
$strSearchFormTitle = 'Buscar en la base de datos';
$strSearchInTables = 'En la(s) tabla(s):';
$strSearchNeedle = 'Palabra(s) o valor(es) a buscar (comod�n: "%"):';
$strSearchOption1 = 'al menos una de estas palabras';
$strSearchOption2 = 'Todas las palabras';
$strSearchOption3 = 'La frase exacta';
$strSearchOption4 = 'como expresi�n regular';
$strSearchResultsFor = 'Resultados de la b�squeda por "<i>%s</i>" %s:';
$strSearchType = 'Encontrado:';
$strSelect = 'Seleccionar';
$strSelectADb = 'Seleccione una base de datos';
$strSelectAll = 'Seleccione todo';
$strSelectFields = 'Seleccionar campos (al menos uno):';
$strSelectNumRows = 'en la consulta';
$strSelectTables = 'Seleccionar tablas';
$strSend = 'Enviar';
$strServer = 'Servidor %s';
$strServerChoice = 'Elecci�n del servidor';
$strServerTrafficNotes = '<b>Server traffic</b>: These tables show the network traffic statistics of this MySQL server since its startup.';
$strServerVersion = 'Versi�n del servidor';
$strSetEnumVal = 'Si el tipo de campo es "enum" o "set", por favor ingrese los valores usando este formato: \'a\',\'b\',\'c\'...<br />Si alguna vez necesita poner una barra invertida("\") o una comilla simple ("\'") entre esos valores, siempre ponga una barra invertida. (Por ejemplo \'\\\\xyz\' o \'a\\\'b\').';
$strShow = 'Mostrar';
$strShowAll = 'Mostrar todo';
$strShowColor = 'Mostrar color';
$strShowCols = 'Mostrar columnas';
$strShowDatadictAs = 'Formato del Diccionario de Datos';
$strShowGrid = 'Mostrar cuadr�cula';
$strShowPHPInfo = 'Mostrar informaci�n de PHP';
$strShowTableDimension = 'Mostrar la dimensi�n de las tablas';
$strShowTables = 'Mostrar las tablas';
$strShowThisQuery = ' Mostrar esta consulta otra vez ';
$strShowingRecords = 'Mostrando registros ';
$strSingly = '(solo)';
$strSize = 'Tama�o';
$strSort = 'Ordenar';
$strSpaceUsage = 'Espacio utilizado';
$strSplitWordsWithSpace = 'Palabras separadas por un espacio (" ").';
$strStatement = 'Enunciado';
$strStrucCSV = 'Datos CSV ';
$strStrucData = 'Estructura y datos';
$strStrucDrop = 'A�adir \'drop table\'';
$strStrucExcelCSV = 'CSV para datos de MS Excel';
$strStrucOnly = '�nicamente la estructura ';
$strStructPropose = 'Planteamiento de una estructura de tabla';
$strStructure = 'Estructura';
$strSubmit = 'Enviar';
$strSuccess = 'Su consulta ha sido ejecutada con �xito';
$strSum = 'Tama�o de las tablas';

$strTable = 'Tabla';
$strTableComments = 'Comentarios de la tabla';
$strTableEmpty = '�El nombre de la tabla est� vac�o!';
$strTableHasBeenDropped = 'Se ha eliminado la tabla %s';
$strTableHasBeenEmptied = 'Se ha vaciado la tabla %s';
$strTableHasBeenFlushed = 'Se ha vaciado el cach� de la tabla %s';
$strTableMaintenance = 'Mantenimiento de la tabla';
$strTableOfContents = 'Tabla de contenido';
$strTableStructure = 'Estructura de tabla para la tabla';
$strTableType = 'Tipo de tabla';
$strTables = '%s tabla(s)';
$strTextAreaLength = ' Debido a su longitud,<br /> este campo puede no ser editable ';
$strTheContent = 'El contenido de su archivo ha sido insertado.';
$strTheContents = 'El contenido del archivo reemplaza el contenido de la tabla seleccionada para las columnas id�nticas primarias o �nicas.';
$strTheTerminator = 'El terminador de los campos.';
$strTotal = 'total';
$strTotalUC = 'Total';
$strType = 'Tipo';

$strUncheckAll = 'Desmarcar todos';
$strUnique = '�nico';
$strUnselectAll = 'Deseleccione todo';
$strUpdatePrivMessage = 'Ud. ha actualizado los privilegios para %s.';
$strUpdateProfile = 'Actualiza el perfil:';
$strUpdateProfileMessage = 'Se ha actualizado el perfil.';
$strUpdateQuery = 'Modificar la consulta';
$strUsage = 'Uso';
$strUseBackquotes = 'Usar "backquotes" con tablas y nombres de campo';
$strUseTables = 'Usar tablas';
$strUser = 'Usuario';
$strUserEmpty = '�El nombre de usuario est� vac�o!';
$strUserName = 'Nombre de usuario';
$strUsers = 'Usuarios';

$strValidateSQL = 'Validar el SQL';
$strValidatorError = 'El validador de SQL no pudo inicializarse. Por favor revise si ha instalado las extensiones php necesarias, como fueron descritas en la %sdocumentaci�n%s.';
$strValue = 'Valor';
$strViewDump = 'Mostrar el volcado esquema de la tabla';
$strViewDumpDB = 'Ver el volcado esquema de la base de datos';

$strWebServerUploadDirectory = 'directorio en el servidor web para subir los archivos';
$strWebServerUploadDirectoryError = 'No est� disponible el directorio que usted habilit� para subir las tareas';
$strWelcome = 'Bienvenido a %s';
$strWithChecked = 'Con marca:';
$strWrongUser = 'Usuario/contrase�a equivocado. Acceso denegado.';

$strYes = 'S�';

$strZip = '"comprimido con zip"';
// To translate
$timespanfmt = '%s days, %s hours, %s minutes and %s seconds'; //to translate

$strAbortedClients = 'Aborted'; //to translate
$strAdministration = 'Administration'; //to translate

$strBzError = 'phpMyAdmin was unable to compress the dump because of a broken Bz2 extension in this php version. It is strongly recommended to set the <code>$cfg[\'BZipDump\']</code> directive in your phpMyAdmin configuration file to <code>FALSE</code>. If you want to use the Bz2 compression features, you should upgrade to a later php version. See php bug report %s for details.'; //to translate

$strCommand = 'Command'; //to translate
$strConnections = 'Connections'; //to translate
$strCouldNotKill = 'phpMyAdmin was unable to kill thread %s. It probably has already been closed.'; //to translate

$strDeleteAndFlush = 'Delete the users and reload the privileges afterwards.'; //to translate
$strDeleteAndFlushDescr = 'This is the cleanest way, but reloading the privileges may take a while.'; //to translate
$strDeleting = 'Deleting %s'; //to translate

$strFailedAttempts = 'Failed attempts'; //to translate
$strFlushPrivilegesNote = 'Note: phpMyAdmin gets the users\' privileges directly from MySQL\'s privilege tables. The content of this tables may differ from the privileges the server uses if manual changes have made to it. In this case, you should %sreload the privileges%s before you continue.'; //to translate

$strGlobalPrivileges = 'Global privileges'; //to translate
$strGlobalValue = 'Global value'; //to translate
$strGrantOption = 'Grant'; //to translate

$strId = 'ID'; //to translate

$strJustDelete = 'Just delete the users from the privilege tables.'; //to translate
$strJustDeleteDescr = 'The &quot;deleted&quot; users will still be able to access the server as usual until the privileges are reloaded.'; //to translate

$strLaTeX = 'LaTeX';  //to translate

$strMoreStatusVars = 'More status variables'; //to translate

$strNoQuery = 'No SQL query!';  //to translate

$strOriginalInterface = 'original interface';  //to translate

$strPasswordChanged = 'The Password for %s was changed successfully.'; // to translate
$strPerHour = 'per hour'; //to translate
$strPrivDescAllPrivileges = 'Includes all privileges except GRANT.'; //to translate
$strPrivDescAlter = 'Allows altering the structure of existing tables.'; //to translate
$strPrivDescCreateDb = 'Allows creating new databases and tables.'; //to translate
$strPrivDescCreateTbl = 'Allows creating new tables.'; //to translate
$strPrivDescCreateTmpTable = 'Allows creating temporary tables.'; //to translate
$strPrivDescDelete = 'Allows deleting data.'; //to translate
$strPrivDescDropDb = 'Allows dropping databases and tables.'; //to translate
$strPrivDescDropTbl = 'Allows dropping tables.'; //to translate
$strPrivDescExecute = 'Allows running stored procedures; Has no effect in this MySQL version.'; //to translate
$strPrivDescFile = 'Allows importing data from and exporting data into files.'; //to translate
$strPrivDescGrant = 'Allows adding users and privileges without reloading the privilege tables.'; //to translate
$strPrivDescIndex = 'Allows creating and dropping indexes.'; //to translate
$strPrivDescInsert = 'Allows inserting and replacing data.'; //to translate
$strPrivDescLockTables = 'Allows locking tables for the current thread.'; //to translate
$strPrivDescProcess3 = 'Allows killing processes of other users.'; //to translate
$strPrivDescProcess4 = 'Allows viewing the complete queries in the process list.'; //to translate
$strPrivDescReferences = 'Has no effect in this MySQL version.'; //to translate
$strPrivDescReload = 'Allows reloading server settings and flushing the server\'s caches.'; //to translate
$strPrivDescReplClient = 'Gives the right to the user to ask where the slaves / masters are.'; //to translate
$strPrivDescReplSlave = 'Needed for the replication slaves.'; //to translate
$strPrivDescSelect = 'Allows reading data.'; //to translate
$strPrivDescShowDb = 'Gives access to the complete list of databases.'; //to translate
$strPrivDescShutdown = 'Allows shutting down the server.'; //to translate
$strPrivDescSuper = 'Allows connectiong, even if maximum number of connections is reached; Required for most administrative operations like setting global variables or killing threads of other users.'; //to translate
$strPrivDescUpdate = 'Allows changing data.'; //to translate
$strPrivDescUsage = 'No privileges.'; //to translate
$strPrivilegesReloaded = 'The privileges were reloaded successfully.'; //to translate
$strProcesslist = 'Process list'; //to translate

$strQueryType = 'Query type'; //to translate

$strReceived = 'Received'; //to translate
$strReloadingThePrivileges = 'Reloading the privileges'; //to translate
$strRemoveSelectedUsers = 'Remove selected users'; //to translate
$strResourceLimits = 'Resource limits'; //to translate
$strRevokeAndDelete = 'Revoke all active privileges from the users and delete them afterwards.'; //to translate
$strRevokeAndDeleteDescr = 'The users will still have the USAGE privilege until the privileges are reloaded.'; //to translate

$strSent = 'Sent'; //to translate
$strServerStatus = 'Runtime Information'; //to translate
$strServerStatusUptime = 'This MySQL server has been running for %s. It started up on %s.'; //to translate
$strServerTabProcesslist = 'Processes'; //to translate
$strServerTabVariables = 'Variables'; //to translate
$strServerVars = 'Server variables and settings'; //to translate
$strSessionValue = 'Session value'; //to translate
$strStatus = 'Status'; //to translate

$strThreadSuccessfullyKilled = 'Thread %s was successfully killed.'; //to translate
$strTime = 'Time'; //to translate
$strTraffic = 'Traffic'; //to translate

$strUserOverview = 'User overview'; //to translate
$strUsersDeleted = 'The selected users have been deleted successfully.'; //to translate

$strVar = 'Variable'; //to translate

$strZeroRemovesTheLimit = 'Note: Setting these options to 0 (zero) removes the limit.'; //to translate
?>
