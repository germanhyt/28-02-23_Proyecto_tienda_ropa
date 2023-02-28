# Template-PHP-SEO

# Tecnologías a utilizar
HTML5, SCSS, JavaScript y PHP

Nomenclaturas
Carpetas con secciones de las páginas: "Section...", por ejemplo: "SectionHero, SectionDonar, etc".
Data de cada componente: "attributes.jsx / attributes.js / attributes.json", dependiendo de la data almacenada.
Estilos del componente: "HeaderStyles.jsx".
Variantes de los estilos del componente: "HeaderVariants.jsx".
Ramas
Main: Rama principal para unir la rama test.
"Integrante de Frontend": Rama para cada uno de los integrantes Frontend que participarán en el proyecto.
Test: Rama donde todos los integrantes integran sus cambios y se resuelven conflictos.
Comandos necesarios para Git
git add -A o git add . : Agrega cambios, modificaciones, carpetas eliminadas al stash
git commit -m "Cambio n": Agrega los cambios al local.
git push origin "rama": Envía todos los cambios al repositorio en Github.
git pull "origin": Trae cambios que se han hecho en la misma rama.
git merge "rama": Trae cambios de una rama a otra y los pega.
git checkout "rama": Cambio de rama.
Sugerencias
Evitar pushear al test sin avisar al encargado.
Regresar a la rama personal después de hacer push en el test.
Para los componentes que solamente se utilizan en una página, alojarlas en carpetas dentro del View.
Componentes reutilizables a lo largo del proyecto, se alojan en la carpeta componentes.
Cada página va a tener su carpeta dentro de la carpeta views y su jsx dentro de la carpeta pages con el mismo nombre de la carpeta.
Con Tailwind, se necesita crear un main.css en el src para incluir los @rules de Tailwind.
