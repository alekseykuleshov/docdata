<?php

namespace JouwWeb\DocData\Type;


class StatusSuccess extends AbstractRequestSuccess
{
    /**
     * @var StatusReport
     */
    protected $report;

    /**
     * @param StatusReport $report
     */
    public function setReport($report)
    {
        $this->report = $report;
    }

    /**
     * @return StatusReport
     */
    public function getReport()
    {
        return $this->report;
    }
}
