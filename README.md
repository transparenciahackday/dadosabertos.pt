Este é o código-fonte do site [dadosabertos.pt](http://dadosabertos.pt), que é criado usando o [Jekyll](https://jekyllrb.com/).

## Como gerar localmente o site

Para podermos ter uma cópia local que possamos ver e testar, é preciso gerar o HTML a partir da fonte do site.

Em primeiro lugar, é importante ter instalado o `Jekyll` e os softwares relacionados. A página oficial contém informações simples de como [instalar Jekyll.](https://jekyllrb.com/docs/installation/)	

Para gerar o site, só temos de correr o simples comando em terminal `jekyll serve`. O terminal indicará um IP para podermos visualizar a páginas. Podemos copiar/colar o IP ou simplesmente escrever, no browser, `localhost:PORTA`, onde a porta é a que indica o terminal. Podemos parar a execução local com as teclas `CTRL+D`. Nota que Jekyll irá fazer render aos ficheiros tal como estão. Alterações feitas aos ficheiros não serão mostrados até pararmos o site e corrermos novamente.
No entanto, há outra forma de gerar localmente o site tendo em conta alterações aos ficheiros à medida que as formos fazendo. `jekyll serve --watch` irá atualizar a página à medidade que vamos fazendo alterações, particularmente útil.

### Criar páginas e como escrever nelas

Para criar páginas, deverás criar um ficheiro com a terminação `.md` dentro da pasta `pages`. Da forma como o site está construído, o motor Jekyll irá gerar as páginas que estejam nessa pasta com essa terminação. Essas páginas são escritas na língua markup `Markdown`. Se nunca escreveste com este formato, recomendamos a leitura da documentação oficial que podes fazê-lo [aqui](https://daringfireball.net/projects/markdown/basics).

## Como colocar o site no ar

Para atualizar a versão no ar do site, que está alojada no GitHub pages, é correr `gulp deploy`.


## Cólofon

TODO: Organizar esta lista

* Ana Isabel Carvalho
* Cátia Matos
* Diana Fernandes
* Francisco Silva
* João Antunes
* Joana Solipa Baptista
* Joana Ventura Lopes
* Luís Oliveira
* Marta Pinto
* Ricardo Lafuente
* Sara Silva


## Licença de uso
