<?php
/**
 * Description of pagination
 *
 * @author Russ
 */
class pagination {
    public $currentPage;
    public $perPage;
    public $totalCount;
    
    public function __construct($page, $perPage, $totalCount) {
        $this->currentPage=(int)$page;
        $this->perPage=(int)$perPage;
        $this->totalCount=(int)$totalCount;
    }
    
    public function offset() {
        return $this->perPage*($this->currentPage - 1);
    }
    
    public function totalPages() {
        return ceil($this->totalCount / $this->perPage);
    }
    
    public function previousPage() {
        $prev = $this->currentPage - 1;
        return ($prev > 0) ? $prev : false;
    }
    
    public function nextPage() {
        $next = $this->currentPage + 1;
        return ($next <= $this->totalPages()) ? $next : false;
    }
    
    public function limit() {
        if (($this->offset()+$this->perPage) > $this->totalCount) {
            $limit = $this->offset() + ($this->totalCount - $this->offset());
        } else {
            $limit = $this->offset() + $this->perPage;
        }
        return $limit;
    }
}
