<?php

require_once 'propel/util/BasePeer.php';
// The object class -- needed for instanceof checks in this class.
// actual class may be a subclass -- as returned by ListCanceledPeer::getOMClass()
include_once 'classes/model/ListCanceled.php';

/**
 * Base static class for performing query and update operations on the 'LIST_CANCELED' table.
 *
 * 
 *
 * @package    workflow.classes.model.om
 */
abstract class BaseListCanceledPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'workflow';

    /** the table name for this class */
    const TABLE_NAME = 'LIST_CANCELED';

    /** A class that can be returned by this peer. */
    const CLASS_DEFAULT = 'classes.model.ListCanceled';

    /** The total number of columns. */
    const NUM_COLUMNS = 21;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;


    /** the column name for the APP_UID field */
    const APP_UID = 'LIST_CANCELED.APP_UID';

    /** the column name for the DEL_INDEX field */
    const DEL_INDEX = 'LIST_CANCELED.DEL_INDEX';

    /** the column name for the USR_UID field */
    const USR_UID = 'LIST_CANCELED.USR_UID';

    /** the column name for the TAS_UID field */
    const TAS_UID = 'LIST_CANCELED.TAS_UID';

    /** the column name for the PRO_UID field */
    const PRO_UID = 'LIST_CANCELED.PRO_UID';

    /** the column name for the APP_NUMBER field */
    const APP_NUMBER = 'LIST_CANCELED.APP_NUMBER';

    /** the column name for the APP_TITLE field */
    const APP_TITLE = 'LIST_CANCELED.APP_TITLE';

    /** the column name for the APP_PRO_TITLE field */
    const APP_PRO_TITLE = 'LIST_CANCELED.APP_PRO_TITLE';

    /** the column name for the APP_TAS_TITLE field */
    const APP_TAS_TITLE = 'LIST_CANCELED.APP_TAS_TITLE';

    /** the column name for the APP_CANCELED_DATE field */
    const APP_CANCELED_DATE = 'LIST_CANCELED.APP_CANCELED_DATE';

    /** the column name for the DEL_PREVIOUS_USR_UID field */
    const DEL_PREVIOUS_USR_UID = 'LIST_CANCELED.DEL_PREVIOUS_USR_UID';

    /** the column name for the DEL_CURRENT_USR_USERNAME field */
    const DEL_CURRENT_USR_USERNAME = 'LIST_CANCELED.DEL_CURRENT_USR_USERNAME';

    /** the column name for the DEL_CURRENT_USR_FIRSTNAME field */
    const DEL_CURRENT_USR_FIRSTNAME = 'LIST_CANCELED.DEL_CURRENT_USR_FIRSTNAME';

    /** the column name for the DEL_CURRENT_USR_LASTNAME field */
    const DEL_CURRENT_USR_LASTNAME = 'LIST_CANCELED.DEL_CURRENT_USR_LASTNAME';

    /** the column name for the DEL_DELEGATE_DATE field */
    const DEL_DELEGATE_DATE = 'LIST_CANCELED.DEL_DELEGATE_DATE';

    /** the column name for the DEL_INIT_DATE field */
    const DEL_INIT_DATE = 'LIST_CANCELED.DEL_INIT_DATE';

    /** the column name for the DEL_DUE_DATE field */
    const DEL_DUE_DATE = 'LIST_CANCELED.DEL_DUE_DATE';

    /** the column name for the DEL_PRIORITY field */
    const DEL_PRIORITY = 'LIST_CANCELED.DEL_PRIORITY';

    /** the column name for the PRO_ID field */
    const PRO_ID = 'LIST_CANCELED.PRO_ID';

    /** the column name for the USR_ID field */
    const USR_ID = 'LIST_CANCELED.USR_ID';

    /** the column name for the TAS_ID field */
    const TAS_ID = 'LIST_CANCELED.TAS_ID';

    /** The PHP to DB Name Mapping */
    private static $phpNameMap = null;


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    private static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('AppUid', 'DelIndex', 'UsrUid', 'TasUid', 'ProUid', 'AppNumber', 'AppTitle', 'AppProTitle', 'AppTasTitle', 'AppCanceledDate', 'DelPreviousUsrUid', 'DelCurrentUsrUsername', 'DelCurrentUsrFirstname', 'DelCurrentUsrLastname', 'DelDelegateDate', 'DelInitDate', 'DelDueDate', 'DelPriority', 'ProId', 'UsrId', 'TasId', ),
        BasePeer::TYPE_COLNAME => array (ListCanceledPeer::APP_UID, ListCanceledPeer::DEL_INDEX, ListCanceledPeer::USR_UID, ListCanceledPeer::TAS_UID, ListCanceledPeer::PRO_UID, ListCanceledPeer::APP_NUMBER, ListCanceledPeer::APP_TITLE, ListCanceledPeer::APP_PRO_TITLE, ListCanceledPeer::APP_TAS_TITLE, ListCanceledPeer::APP_CANCELED_DATE, ListCanceledPeer::DEL_PREVIOUS_USR_UID, ListCanceledPeer::DEL_CURRENT_USR_USERNAME, ListCanceledPeer::DEL_CURRENT_USR_FIRSTNAME, ListCanceledPeer::DEL_CURRENT_USR_LASTNAME, ListCanceledPeer::DEL_DELEGATE_DATE, ListCanceledPeer::DEL_INIT_DATE, ListCanceledPeer::DEL_DUE_DATE, ListCanceledPeer::DEL_PRIORITY, ListCanceledPeer::PRO_ID, ListCanceledPeer::USR_ID, ListCanceledPeer::TAS_ID, ),
        BasePeer::TYPE_FIELDNAME => array ('APP_UID', 'DEL_INDEX', 'USR_UID', 'TAS_UID', 'PRO_UID', 'APP_NUMBER', 'APP_TITLE', 'APP_PRO_TITLE', 'APP_TAS_TITLE', 'APP_CANCELED_DATE', 'DEL_PREVIOUS_USR_UID', 'DEL_CURRENT_USR_USERNAME', 'DEL_CURRENT_USR_FIRSTNAME', 'DEL_CURRENT_USR_LASTNAME', 'DEL_DELEGATE_DATE', 'DEL_INIT_DATE', 'DEL_DUE_DATE', 'DEL_PRIORITY', 'PRO_ID', 'USR_ID', 'TAS_ID', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    private static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('AppUid' => 0, 'DelIndex' => 1, 'UsrUid' => 2, 'TasUid' => 3, 'ProUid' => 4, 'AppNumber' => 5, 'AppTitle' => 6, 'AppProTitle' => 7, 'AppTasTitle' => 8, 'AppCanceledDate' => 9, 'DelPreviousUsrUid' => 10, 'DelCurrentUsrUsername' => 11, 'DelCurrentUsrFirstname' => 12, 'DelCurrentUsrLastname' => 13, 'DelDelegateDate' => 14, 'DelInitDate' => 15, 'DelDueDate' => 16, 'DelPriority' => 17, 'ProId' => 18, 'UsrId' => 19, 'TasId' => 20, ),
        BasePeer::TYPE_COLNAME => array (ListCanceledPeer::APP_UID => 0, ListCanceledPeer::DEL_INDEX => 1, ListCanceledPeer::USR_UID => 2, ListCanceledPeer::TAS_UID => 3, ListCanceledPeer::PRO_UID => 4, ListCanceledPeer::APP_NUMBER => 5, ListCanceledPeer::APP_TITLE => 6, ListCanceledPeer::APP_PRO_TITLE => 7, ListCanceledPeer::APP_TAS_TITLE => 8, ListCanceledPeer::APP_CANCELED_DATE => 9, ListCanceledPeer::DEL_PREVIOUS_USR_UID => 10, ListCanceledPeer::DEL_CURRENT_USR_USERNAME => 11, ListCanceledPeer::DEL_CURRENT_USR_FIRSTNAME => 12, ListCanceledPeer::DEL_CURRENT_USR_LASTNAME => 13, ListCanceledPeer::DEL_DELEGATE_DATE => 14, ListCanceledPeer::DEL_INIT_DATE => 15, ListCanceledPeer::DEL_DUE_DATE => 16, ListCanceledPeer::DEL_PRIORITY => 17, ListCanceledPeer::PRO_ID => 18, ListCanceledPeer::USR_ID => 19, ListCanceledPeer::TAS_ID => 20, ),
        BasePeer::TYPE_FIELDNAME => array ('APP_UID' => 0, 'DEL_INDEX' => 1, 'USR_UID' => 2, 'TAS_UID' => 3, 'PRO_UID' => 4, 'APP_NUMBER' => 5, 'APP_TITLE' => 6, 'APP_PRO_TITLE' => 7, 'APP_TAS_TITLE' => 8, 'APP_CANCELED_DATE' => 9, 'DEL_PREVIOUS_USR_UID' => 10, 'DEL_CURRENT_USR_USERNAME' => 11, 'DEL_CURRENT_USR_FIRSTNAME' => 12, 'DEL_CURRENT_USR_LASTNAME' => 13, 'DEL_DELEGATE_DATE' => 14, 'DEL_INIT_DATE' => 15, 'DEL_DUE_DATE' => 16, 'DEL_PRIORITY' => 17, 'PRO_ID' => 18, 'USR_ID' => 19, 'TAS_ID' => 20, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
    );

    /**
     * @return     MapBuilder the map builder for this peer
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
     */
    public static function getMapBuilder()
    {
        include_once 'classes/model/map/ListCanceledMapBuilder.php';
        return BasePeer::getMapBuilder('classes.model.map.ListCanceledMapBuilder');
    }
    /**
     * Gets a map (hash) of PHP names to DB column names.
     *
     * @return     array The PHP to DB name map for this peer
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
     * @deprecated Use the getFieldNames() and translateFieldName() methods instead of this.
     */
    public static function getPhpNameMap()
    {
        if (self::$phpNameMap === null) {
            $map = ListCanceledPeer::getTableMap();
            $columns = $map->getColumns();
            $nameMap = array();
            foreach ($columns as $column) {
                $nameMap[$column->getPhpName()] = $column->getColumnName();
            }
            self::$phpNameMap = $nameMap;
        }
        return self::$phpNameMap;
    }
    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants TYPE_PHPNAME,
     *                         TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return     string translated name of the field.
     */
    static public function translateFieldName($name, $fromType, $toType)
    {
        $toNames = self::getFieldNames($toType);
        $key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
        }
        return $toNames[$key];
    }

    /**
     * Returns an array of of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants TYPE_PHPNAME,
     *                      TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM
     * @return     array A list of field names
     */

    static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, self::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants TYPE_PHPNAME, TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM. ' . $type . ' was given.');
        }
        return self::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *      $c->addAlias("alias1", TablePeer::TABLE_NAME);
     *      $c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. ListCanceledPeer::COLUMN_NAME).
     * @return     string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ListCanceledPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      criteria object containing the columns to add.
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria)
    {

        $criteria->addSelectColumn(ListCanceledPeer::APP_UID);

        $criteria->addSelectColumn(ListCanceledPeer::DEL_INDEX);

        $criteria->addSelectColumn(ListCanceledPeer::USR_UID);

        $criteria->addSelectColumn(ListCanceledPeer::TAS_UID);

        $criteria->addSelectColumn(ListCanceledPeer::PRO_UID);

        $criteria->addSelectColumn(ListCanceledPeer::APP_NUMBER);

        $criteria->addSelectColumn(ListCanceledPeer::APP_TITLE);

        $criteria->addSelectColumn(ListCanceledPeer::APP_PRO_TITLE);

        $criteria->addSelectColumn(ListCanceledPeer::APP_TAS_TITLE);

        $criteria->addSelectColumn(ListCanceledPeer::APP_CANCELED_DATE);

        $criteria->addSelectColumn(ListCanceledPeer::DEL_PREVIOUS_USR_UID);

        $criteria->addSelectColumn(ListCanceledPeer::DEL_CURRENT_USR_USERNAME);

        $criteria->addSelectColumn(ListCanceledPeer::DEL_CURRENT_USR_FIRSTNAME);

        $criteria->addSelectColumn(ListCanceledPeer::DEL_CURRENT_USR_LASTNAME);

        $criteria->addSelectColumn(ListCanceledPeer::DEL_DELEGATE_DATE);

        $criteria->addSelectColumn(ListCanceledPeer::DEL_INIT_DATE);

        $criteria->addSelectColumn(ListCanceledPeer::DEL_DUE_DATE);

        $criteria->addSelectColumn(ListCanceledPeer::DEL_PRIORITY);

        $criteria->addSelectColumn(ListCanceledPeer::PRO_ID);

        $criteria->addSelectColumn(ListCanceledPeer::USR_ID);

        $criteria->addSelectColumn(ListCanceledPeer::TAS_ID);

    }

    const COUNT = 'COUNT(LIST_CANCELED.APP_UID)';
    const COUNT_DISTINCT = 'COUNT(DISTINCT LIST_CANCELED.APP_UID)';

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns (You can also set DISTINCT modifier in Criteria).
     * @param      Connection $con
     * @return     int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, $con = null)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // clear out anything that might confuse the ORDER BY clause
        $criteria->clearSelectColumns()->clearOrderByColumns();
        if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->addSelectColumn(ListCanceledPeer::COUNT_DISTINCT);
        } else {
            $criteria->addSelectColumn(ListCanceledPeer::COUNT);
        }

        // just in case we're grouping: add those columns to the select statement
        foreach ($criteria->getGroupByColumns() as $column) {
            $criteria->addSelectColumn($column);
        }

        $rs = ListCanceledPeer::doSelectRS($criteria, $con);
        if ($rs->next()) {
            return $rs->getInt(1);
        } else {
            // no rows returned; we infer that means 0 matches.
            return 0;
        }
    }
    /**
     * Method to select one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      Connection $con
     * @return     ListCanceled
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ListCanceledPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }
        return null;
    }
    /**
     * Method to do selects.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      Connection $con
     * @return     array Array of selected Objects
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, $con = null)
    {
        return ListCanceledPeer::populateObjects(ListCanceledPeer::doSelectRS($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect()
     * method to get a ResultSet.
     *
     * Use this method directly if you want to just get the resultset
     * (instead of an array of objects).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      Connection $con the connection to use
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
     * @return     ResultSet The resultset object with numerically-indexed fields.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectRS(Criteria $criteria, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(self::DATABASE_NAME);
        }

        if (!$criteria->getSelectColumns()) {
            $criteria = clone $criteria;
            ListCanceledPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        // BasePeer returns a Creole ResultSet, set to return
        // rows indexed numerically.
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
     */
    public static function populateObjects(ResultSet $rs)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = ListCanceledPeer::getOMClass();
        $cls = Propel::import($cls);
        // populate the object(s)
        while ($rs->next()) {

            $obj = new $cls();
            $obj->hydrate($rs);
            $results[] = $obj;

        }
        return $results;
    }
    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return     TableMap
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
    }

    /**
     * The class that the Peer will make instances of.
     *
     * This uses a dot-path notation which is tranalted into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @return     string path.to.ClassName
     */
    public static function getOMClass()
    {
        return ListCanceledPeer::CLASS_DEFAULT;
    }

    /**
     * Method perform an INSERT on the database, given a ListCanceled or Criteria object.
     *
     * @param      mixed $values Criteria or ListCanceled object containing data that is used to create the INSERT statement.
     * @param      Connection $con the connection to use
     * @return     mixed The new primary key.
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(self::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from ListCanceled object
        }


        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->begin();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (PropelException $e) {
            $con->rollback();
            throw $e;
        }

        return $pk;
    }

    /**
     * Method perform an UPDATE on the database, given a ListCanceled or Criteria object.
     *
     * @param      mixed $values Criteria or ListCanceled object containing data create the UPDATE statement.
     * @param      Connection $con The connection to use (specify Connection exert more control over transactions).
     * @return     int The number of affected rows (if supported by underlying database driver).
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(self::DATABASE_NAME);
        }

        $selectCriteria = new Criteria(self::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ListCanceledPeer::APP_UID);
            $selectCriteria->add(ListCanceledPeer::APP_UID, $criteria->remove(ListCanceledPeer::APP_UID), $comparison);

            $comparison = $criteria->getComparison(ListCanceledPeer::DEL_INDEX);
            $selectCriteria->add(ListCanceledPeer::DEL_INDEX, $criteria->remove(ListCanceledPeer::DEL_INDEX), $comparison);

        } else {
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Method to DELETE all rows from the LIST_CANCELED table.
     *
     * @return     int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll($con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(self::DATABASE_NAME);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->begin();
            $affectedRows += BasePeer::doDeleteAll(ListCanceledPeer::TABLE_NAME, $con);
            $con->commit();
            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollback();
            throw $e;
        }
    }

    /**
     * Method perform a DELETE on the database, given a ListCanceled or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or ListCanceled object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      Connection $con the connection to use
     * @return     int  The number of affected rows (if supported by underlying database driver).
     *             This includes CASCADE-related rows
     *              if supported by native driver or if emulated using Propel.
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
    */
    public static function doDelete($values, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ListCanceledPeer::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } elseif ($values instanceof ListCanceled) {

            $criteria = $values->buildPkeyCriteria();
        } else {
            // it must be the primary key
            $criteria = new Criteria(self::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey
            // values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            $vals = array();
            foreach ($values as $value) {

                $vals[0][] = $value[0];
                $vals[1][] = $value[1];
            }

            $criteria->add(ListCanceledPeer::APP_UID, $vals[0], Criteria::IN);
            $criteria->add(ListCanceledPeer::DEL_INDEX, $vals[1], Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->begin();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            $con->commit();
            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollback();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given ListCanceled object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      ListCanceled $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate(ListCanceled $obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ListCanceledPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ListCanceledPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->containsColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(ListCanceledPeer::DATABASE_NAME, ListCanceledPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param string $app_uid
       * @param int $del_index
        * @param      Connection $con
     * @return     ListCanceled
     */
    public static function retrieveByPK($app_uid, $del_index, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(self::DATABASE_NAME);
        }
        $criteria = new Criteria();
        $criteria->add(ListCanceledPeer::APP_UID, $app_uid);
        $criteria->add(ListCanceledPeer::DEL_INDEX, $del_index);
        $v = ListCanceledPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
}


// static code to register the map builder for this Peer with the main Propel class
if (Propel::isInit()) {
    // the MapBuilder classes register themselves with Propel during initialization
    // so we need to load them here.
    try {
        BaseListCanceledPeer::getMapBuilder();
    } catch (Exception $e) {
        Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
    }
} else {
    // even if Propel is not yet initialized, the map builder class can be registered
    // now and then it will be loaded when Propel initializes.
    require_once 'classes/model/map/ListCanceledMapBuilder.php';
    Propel::registerMapBuilder('classes.model.map.ListCanceledMapBuilder');
}

