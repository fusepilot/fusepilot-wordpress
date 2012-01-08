/*
Language: RenderMan RSL
Description: RenderMan RSL Language
Author: Konstantin Evdokimenko <qewerty@gmail.com>
Contributors: Shuen-Huei Guan <drake.guan@gmail.com>
*/

hljs.LANGUAGES.rsl  = {
  defaultMode: {
    keywords: {
      'keyword': {'float': 1, 'color': 1, 'point': 1, 'normal': 1, 'vector': 1,
                  'matrix': 1, 'while': 1, 'for': 1, 'if': 1, 'do': 1,
                  'return': 1, 'else': 1, 'break': 1, 'extern': 1, 'continue': 1},
      'built_in': {
                    'abs': 1,
                    'acos': 1,
                    'ambient': 1,
                    'area': 1,
                    'asin': 1,
                    'atan': 1,
                    'atmosphere': 1,
                    'attribute': 1,
                    'calculatenormal': 1,
                    'ceil': 1,
                    'cellnoise': 1,
                    'clamp': 1,
                    'comp': 1,
                    'concat': 1,
                    'cos': 1,
                    'degrees': 1,
                    'depth': 1,
                    'Deriv': 1,
                    'diffuse': 1,
                    'distance': 1,
                    'Du': 1,
                    'Dv': 1,
                    'environment': 1,
                    'exp': 1,
                    'faceforward': 1,
                    'filterstep': 1,
                    'floor': 1,
                    'format': 1,
                    'fresnel': 1,
                    'incident': 1,
                    'length': 1,
                    'lightsource': 1,
                    'log': 1,
                    'match': 1,
                    'max': 1,
                    'min': 1,
                    'mod': 1,
                    'noise': 1,
                    'normalize': 1,
                    'ntransform': 1,
                    'opposite': 1,
                    'option': 1,
                    'phong': 1,
                    'pnoise': 1,
                    'pow': 1,
                    'printf': 1,
                    'ptlined': 1,
                    'radians': 1,
                    'random': 1,
                    'reflect': 1,
                    'refract': 1,
                    'renderinfo': 1,
                    'round': 1,
                    'setcomp': 1,
                    'setxcomp': 1,
                    'setycomp': 1,
                    'setzcomp': 1,
                    'shadow': 1,
                    'sign': 1,
                    'sin': 1,
                    'smoothstep': 1,
                    'specular': 1,
                    'specularbrdf': 1,
                    'spline': 1,
                    'sqrt': 1,
                    'step': 1,
                    'tan': 1,
                    'texture': 1,
                    'textureinfo': 1,
                    'trace': 1,
                    'transform': 1,
                    'vtransform': 1,
                    'xcomp': 1,
                    'ycomp': 1,
                    'zcomp': 1
                    }
    },
    illegal: '</',
    contains: [
      hljs.C_LINE_COMMENT_MODE,
      hljs.C_BLOCK_COMMENT_MODE,
      hljs.QUOTE_STRING_MODE,
      hljs.APOS_STRING_MODE,
      hljs.C_NUMBER_MODE,
      {
        className: 'preprocessor',
        begin: '#', end: '$'
      },
      {
        className: 'shader',
        begin: 'surface |displacement |light |volume |imager ', end: '\\(',
        keywords: {'surface': 1, 'displacement': 1, 'light': 1, 'volume': 1, 'imager': 1}
      },
      {
        className: 'shading',
        begin: 'illuminate|illuminance|gather', end: '\\(',
        keywords: {'illuminate': 1, 'illuminance': 1, 'gather': 1}
      }
    ]
  }
};
