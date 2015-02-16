var CA = CA || {};
var CA.Collection = CA.Collection || {};
CA.Model = CA.Model || {};

(function(){
	CA.Model.QuestionType = Backbone.Model.extend({
		defaults : {
			id : null,
			name : null,
			desc : null,
			cls : 'CA.SurveyEditor.defaults'
		}
	});

	CA.Collection.QuestionType = Backbone.Collection.extend({
		model : CA.Model.QuestionType
	});
});