<?php

namespace bizley\migration\table;

class TableColumnChar extends TableColumn
{
    /**
     * @param TableStructure $table
     */
    public function buildSpecificDefinition($table)
    {
        $this->definition[] = "char({$this->length})";
    }
}
