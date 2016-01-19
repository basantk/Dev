<?php
# Has one relation
$hasOne='profile';
#in other way we can write
public $hasOne=array(
	'Profile'=>array(
		'className'=>'Profile',
		'condition'=>array(),
		'foreignKey'=>'user_id' //by default it create singular name of the current table and add the sufix _id. like user_id.
		'dependent'=>true //dependent set to true then if you call delete() method then also delete associated data.
	)
);

# Belongs to Methods -----in profile table
public $belongsTo=array(
	'User'=>array(
		'className'=>'User',
		'conditions'=>array(),
		'foreignKey'=''
	)
);

#Has Many RelationShip
public $hasMany=array(
	'Comment'=>array(
		'className'=>'Coment',
		'conditions'=>array(),
		'foreignKey'='user_id'
	)
);

# Has and Belogns to Many(HABTM)

public $hasAndBelongsToMany=array(
	''
);

class Recipe extends AppModel {
    public $hasAndBelongsToMany = array(
        'Ingredient' =>
            array(
                'className' => 'Ingredient',
                'joinTable' => 'ingredients_recipes',
                'foreignKey' => 'recipe_id',
                'associationForeignKey' => 'ingredient_id',
                'unique' => true,
                'conditions' => '',
                'fields' => '',
                'order' => '',
                'limit' => '',
                'offset' => '',
                'finderQuery' => '',
                'with' => ''
            )
    );
}