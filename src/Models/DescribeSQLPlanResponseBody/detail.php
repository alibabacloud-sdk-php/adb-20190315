<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSQLPlanResponseBody;

use AlibabaCloud\Tea\Model;

class detail extends Model
{
    /**
     * @description The total CPU time consumed by all operators on multithreaded servers when the SQL statement is executed. Unit: milliseconds.
     *
     * @example 6100
     *
     * @var int
     */
    public $CPUTime;

    /**
     * @description The IP address of the client that is used to execute the SQL statement.
     *
     * @example 172.16.***.***
     *
     * @var string
     */
    public $clientIP;

    /**
     * @description The name of the database on which the SQL statement is executed.
     *
     * @example adb_demo
     *
     * @var string
     */
    public $database;

    /**
     * @description The total number of rows generated by the SQL statement.
     *
     * @example 1
     *
     * @var int
     */
    public $outputRows;

    /**
     * @description The total amount of data generated by the SQL statement. Unit: byte.
     *
     * @example 9
     *
     * @var int
     */
    public $outputSize;

    /**
     * @description The maximum memory usage when the SQL statement is executed. Unit: byte.
     *
     * @example 441802
     *
     * @var int
     */
    public $peakMemory;

    /**
     * @description The time when the execution plan of the SQL statement is generated. Unit: milliseconds.
     *
     * @example 86
     *
     * @var int
     */
    public $planningTime;

    /**
     * @description The amount of time that the SQL statement is queued before it is executed. Unit: milliseconds.
     *
     * @example 0
     *
     * @var int
     */
    public $queuedTime;

    /**
     * @description The SQL statement.
     *
     * @example INSERT OVERWRITE INTO hdfs_import_external\nSELECT *\nFROM adb_hdfs_import_source
     *
     * @var string
     */
    public $SQL;

    /**
     * @description The beginning of the time range in which the SQL statement is executed. The time is in the UNIX timestamp format. Unit: milliseconds.
     *
     * @example 1622102683243
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The final execution state of the SQL statement. Valid values:
     *
     *   FINISHED
     *   FAILED
     *
     * @example FINISHED
     *
     * @var string
     */
    public $state;

    /**
     * @description The total number of stages in the SQL statement.
     *
     * @example 4
     *
     * @var int
     */
    public $totalStage;

    /**
     * @description The total number of tasks in the SQL statement.
     *
     * @example 4
     *
     * @var int
     */
    public $totalTask;

    /**
     * @description The time consumed to execute the SQL statement. Unit: milliseconds.
     *
     * @example 2340
     *
     * @var int
     */
    public $totalTime;

    /**
     * @description The name of the user who submitted the SQL statement.
     *
     * @example test_acc
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'CPUTime'      => 'CPUTime',
        'clientIP'     => 'ClientIP',
        'database'     => 'Database',
        'outputRows'   => 'OutputRows',
        'outputSize'   => 'OutputSize',
        'peakMemory'   => 'PeakMemory',
        'planningTime' => 'PlanningTime',
        'queuedTime'   => 'QueuedTime',
        'SQL'          => 'SQL',
        'startTime'    => 'StartTime',
        'state'        => 'State',
        'totalStage'   => 'TotalStage',
        'totalTask'    => 'TotalTask',
        'totalTime'    => 'TotalTime',
        'user'         => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->CPUTime) {
            $res['CPUTime'] = $this->CPUTime;
        }
        if (null !== $this->clientIP) {
            $res['ClientIP'] = $this->clientIP;
        }
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->outputRows) {
            $res['OutputRows'] = $this->outputRows;
        }
        if (null !== $this->outputSize) {
            $res['OutputSize'] = $this->outputSize;
        }
        if (null !== $this->peakMemory) {
            $res['PeakMemory'] = $this->peakMemory;
        }
        if (null !== $this->planningTime) {
            $res['PlanningTime'] = $this->planningTime;
        }
        if (null !== $this->queuedTime) {
            $res['QueuedTime'] = $this->queuedTime;
        }
        if (null !== $this->SQL) {
            $res['SQL'] = $this->SQL;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->totalStage) {
            $res['TotalStage'] = $this->totalStage;
        }
        if (null !== $this->totalTask) {
            $res['TotalTask'] = $this->totalTask;
        }
        if (null !== $this->totalTime) {
            $res['TotalTime'] = $this->totalTime;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CPUTime'])) {
            $model->CPUTime = $map['CPUTime'];
        }
        if (isset($map['ClientIP'])) {
            $model->clientIP = $map['ClientIP'];
        }
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['OutputRows'])) {
            $model->outputRows = $map['OutputRows'];
        }
        if (isset($map['OutputSize'])) {
            $model->outputSize = $map['OutputSize'];
        }
        if (isset($map['PeakMemory'])) {
            $model->peakMemory = $map['PeakMemory'];
        }
        if (isset($map['PlanningTime'])) {
            $model->planningTime = $map['PlanningTime'];
        }
        if (isset($map['QueuedTime'])) {
            $model->queuedTime = $map['QueuedTime'];
        }
        if (isset($map['SQL'])) {
            $model->SQL = $map['SQL'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['TotalStage'])) {
            $model->totalStage = $map['TotalStage'];
        }
        if (isset($map['TotalTask'])) {
            $model->totalTask = $map['TotalTask'];
        }
        if (isset($map['TotalTime'])) {
            $model->totalTime = $map['TotalTime'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
