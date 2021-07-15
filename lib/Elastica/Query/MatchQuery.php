<?php

namespace Elastica\Query;

/**
 * Match query.
 *
 * This class is for forward compatibility reasons. For PHP 8 and above use MatchQuery as Match is reserved.
 */
class MatchQuery extends AbstractMatch
{
    private const MATCH_QUERY_BASENAME = 'match';

    public function toArray()
    {
        $data = [self::MATCH_QUERY_BASENAME => $this->getParams()];

        if (!empty($this->_rawParams)) {
            $data = array_merge($data, $this->_rawParams);
        }

        return $this->_convertArrayable($data);
    }
}
