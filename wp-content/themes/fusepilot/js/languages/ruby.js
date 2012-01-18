/*
Language: Ruby
Author: Anton Kovalyov <anton@kovalyov.net>
Contributors: Peter Leonov <gojpeg@yandex.ru>, Vasily Polovnyov <vast@whiteants.net>, Loren Segal <lsegal@soen.ca>
*/

hljs.LANGUAGES.ruby = function(){
  var RUBY_IDENT_RE = '[a-zA-Z_][a-zA-Z0-9_]*(\\!|\\?)?';
  var RUBY_METHOD_RE = '[a-zA-Z_]\\w*[!?=]?|[-+~]\\@|<<|>>|=~|===?|<=>|[<>]=?|\\*\\*|[-/+%^&*~`|]|\\[\\]=?';
  var RUBY_KEYWORDS = {'and': 1, 'false': 1, 'then': 1, 'defined': 1, 'module': 1, 'in': 1, 'return': 1, 'redo': 1, 'if': 1, 'BEGIN': 1, 'retry': 1, 'end': 1, 'for': 1, 'true': 1, 'self': 1, 'when': 1, 'next': 1, 'until': 1, 'do': 1, 'begin': 1, 'unless': 1, 'END': 1, 'rescue': 1, 'nil': 1, 'else': 1, 'break': 1, 'undef': 1, 'not': 1, 'super': 1, 'class': 1, 'case': 1, 'require': 1, 'yield': 1, 'alias': 1, 'while': 1, 'ensure': 1, 'elsif': 1, 'or': 1, 'def': 1};
  var YARDOCTAG = {
    className: 'yardoctag',
    begin: '@[A-Za-z]+'
  };
  var COMMENT1 = {
    className: 'comment',
    begin: '#', end: '$',
    contains: [YARDOCTAG]
  };
  var COMMENT2 = {
    className: 'comment',
    begin: '^\\=begin', end: '^\\=end',
    contains: [YARDOCTAG],
    relevance: 10
  };
  var COMMENT3 = {
    className: 'comment',
    begin: '^__END__', end: '\\n$'
  };
  var SUBST = {
    className: 'subst',
    begin: '#\\{', end: '}',
    lexems: RUBY_IDENT_RE,
    keywords: RUBY_KEYWORDS
  };
  var STR_CONTAINS = [hljs.BACKSLASH_ESCAPE, SUBST];
  var STR1 = {
    className: 'string',
    begin: '\'', end: '\'',
    contains: STR_CONTAINS,
    relevance: 0
  };
  var STR2 = {
    className: 'string',
    begin: '"', end: '"',
    contains: STR_CONTAINS,
    relevance: 0
  };
  var STR3 = {
    className: 'string',
    begin: '%[qw]?\\(', end: '\\)',
    contains: STR_CONTAINS,
    relevance: 10
  };
  var STR4 = {
    className: 'string',
    begin: '%[qw]?\\[', end: '\\]',
    contains: STR_CONTAINS,
    relevance: 10
  };
  var STR5 = {
    className: 'string',
    begin: '%[qw]?{', end: '}',
    contains: STR_CONTAINS,
    relevance: 10
  };
  var STR6 = {
    className: 'string',
    begin: '%[qw]?<', end: '>',
    contains: STR_CONTAINS,
    relevance: 10
  };
  var STR7 = {
    className: 'string',
    begin: '%[qw]?/', end: '/',
    contains: STR_CONTAINS,
    relevance: 10
  };
  var STR8 = {
    className: 'string',
    begin: '%[qw]?%', end: '%',
    contains: STR_CONTAINS,
    relevance: 10
  };
  var STR9 = {
    className: 'string',
    begin: '%[qw]?-', end: '-',
    contains: STR_CONTAINS,
    relevance: 10
  };
  var STR10 = {
    className: 'string',
    begin: '%[qw]?\\|', end: '\\|',
    contains: STR_CONTAINS,
    relevance: 10
  };
  var FUNCTION = {
    className: 'function',
    begin: '\\bdef\\s+', end: ' |$|;',
    lexems: RUBY_IDENT_RE,
    keywords: RUBY_KEYWORDS,
    contains: [
      {
        className: 'title',
        begin: RUBY_METHOD_RE,
        lexems: RUBY_IDENT_RE,
        keywords: RUBY_KEYWORDS
      },
      {
        className: 'params',
        begin: '\\(', end: '\\)',
        lexems: RUBY_IDENT_RE,
        keywords: RUBY_KEYWORDS
      },
      COMMENT1, COMMENT2, COMMENT3
    ]
  };
  var IDENTIFIER = {
    className: 'identifier',
    begin: RUBY_IDENT_RE,
    lexems: RUBY_IDENT_RE,
    keywords: RUBY_KEYWORDS,
    relevance: 0
  };

  var RUBY_DEFAULT_CONTAINS = [
    COMMENT1, COMMENT2, COMMENT3,
    STR1, STR2, STR3, STR4, STR5, STR6, STR7, STR8, STR9, STR10,
    {
      className: 'class',
      begin: '\\b(class|module)\\b', end: '$|;',
      keywords: {'class': 1, 'module': 1},
      contains: [
        {
          className: 'title',
          begin: '[A-Za-z_]\\w*(::\\w+)*(\\?|\\!)?',
          relevance: 0
        },
        {
          className: 'inheritance',
          begin: '<\\s*',
          contains: [{
            className: 'parent',
            begin: '(' + hljs.IDENT_RE + '::)?' + hljs.IDENT_RE
          }]
        },
        COMMENT1, COMMENT2, COMMENT3
      ]
    },
    FUNCTION,
    {
      className: 'constant',
      begin: '(::)?([A-Z]\\w*(::)?)+',
      relevance: 0
    },
    {
      className: 'symbol',
      begin: ':',
      contains: [STR1, STR2, STR3, STR4, STR5, STR6, STR7, STR8, STR9, STR10, IDENTIFIER],
      relevance: 0
    },
    {
      className: 'number',
      begin: '(\\b0[0-7_]+)|(\\b0x[0-9a-fA-F_]+)|(\\b[1-9][0-9_]*(\\.[0-9_]+)?)|[0_]\\b',
      relevance: 0
    },
    {
      className: 'number',
      begin: '\\?\\w'
    },
    {
      className: 'variable',
      begin: '(\\$\\W)|((\\$|\\@\\@?)(\\w+))'
    },
    IDENTIFIER,
    { // regexp container
      begin: '(' + hljs.RE_STARTERS_RE + ')\\s*',
      contains: [
        COMMENT1, COMMENT2, COMMENT3,
        {
          className: 'regexp',
          begin: '/', end: '/[a-z]*',
          illegal: '\\n',
          contains: [hljs.BACKSLASH_ESCAPE]
        }
      ],
      relevance: 0
    }
  ];
  SUBST.contains = RUBY_DEFAULT_CONTAINS;
  FUNCTION.contains[1].contains = RUBY_DEFAULT_CONTAINS;

  return {
    defaultMode: {
      lexems: RUBY_IDENT_RE,
      keywords: RUBY_KEYWORDS,
      contains: RUBY_DEFAULT_CONTAINS
    }
  };
}();
