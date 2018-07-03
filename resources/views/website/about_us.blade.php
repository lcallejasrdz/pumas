@extends('layout.principal')

@section('title', '| '.trans($active.'.title'))

@section('styles')
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1>{{ trans($active.'.title') }}</h1>
        </div>
    </div>
	<div class="row">
		<div class="col-xs-12">
			<p class="text-justify">Damos la Bienvenida a <strong>La Escuela Oficial PUMAS Madín</strong> a todos los padres de familia, alumnos, entrenadores y al público.</p>
		    <p class="text-justify">La Escuela Oficial PUMAS Madín se forma con la intención de ser la única escuela de la zona con una estructura consolidada tanto el ámbito Deportivo como Administrativo avalada y registrada por parte del Club Universidad Nacional A. C.</p>
		    <p class="text-justify">Nos podremos equivocar, de hecho eso pasará, seguro, pero todo nuestro objetivo será la formación de los jugadores trabajando con ellos. Sabemos cómo hacerlo, sabemos que es lo necesario para poderlo conseguir, de qué herramientas dotar a la Escuela Oficial de PUMAS Madín para que el objetivo sea más fácil de lograr.</p>
		    <p class="text-justify">Esperamos estén orgullosos del trabajo de la escuela para que porten con orgullo el símbolo y los colores del Club Universidad Nacional al cual representamos.</p>
		    <h2>Misión</h2>
		    <p class="text-justify">La escuela Oficial PUMAS Madín pretende el desarrollo físico, motriz, cognitivo, afectivo y social de los niños y jóvenes por medio de los procesos y programas que les permita conocer y aprender del deporte, generando hábitos saludables y una mejor calidad de vida. Formamos personas a partir del deporte.</p>
		    <h2>Visión</h2>
		    <p class="text-justify">Ser una de las mejores escuelas filiales de PUMAS llevando una práctica deportiva, reconocida como una de las mejores escuelas a nivel nacional a partir de equipos conformados por niños y jóvenes desatacados, además nos preocupamos por la formación integral de los alumnos que la conforman fomentando la disciplina y los valores del Club.</p>
		    <h2>Objetivos</h2>
		    <p class="text-justify">Fomentar la práctica del fútbol, la recreación  y el aprovechamiento del tiempo libre en los niños y jóvenes, buscando la construcción de valores y principios de convivencia social.</p>
		    <ol type="A">
		    	<li>Utilizar adecuadamente las instalaciones aportadas por el Club</li>
		    	<li>Crear él hábito deportivo en niños y jóvenes participantes de este proyecto buscando el mantenimiento de la salud física y mental.</li>
		    	<li>Contribuir a fortalecer los programas preventivos en contra de los vicios y la drogadicción.</li>
		    	<li>Ofrecer a los niños y jóvenes una formación deportiva utilizando un proceso estructurado de entrenamiento  que asegure en forma permanente el progreso de los alumnos.</li>
		    	<li>Integrar a la familia</li>
		    </ol>
		    <p class="text-justify">Promover los talentos que se detecten en el desarrollo del programa y estructurar un equipo para representaciones en eventos deportivos.</p>
		</div>
	</div>
@endsection

@section('scripts')
@endsection