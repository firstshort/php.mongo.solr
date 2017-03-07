<?php
class Mapper
{
        static protected $map = array(
                '_id' => 'id_s',
                'name' => 'name_t',
                'tags_highway' => 'tags_highway_t',
        );

        static function doArray( $prefix, $array )
        {
                $fields = array();
                foreach ( $array as $field => $value )
                {
                        if ( is_array( $value ) )
                        {
                                $fields = array_merge(
                                        $fields,
                                        self::doArray( $prefix . $field . '_', $value )
                                );
                        }
                        else if ( isset( self::$map[$prefix . $field] ) )
                        {
                                $fields[self::$map[$prefix . $field]] = $value;
                        }
                        else
                        {
                                $fields[$prefix . $field . '_t'] = $value;
                        }
                }
                return $fields;
        }

        static function mapFields( $document )
        {
                $solrFields = self::doArray( '', $document );
                return $solrFields;
        }
}
?>