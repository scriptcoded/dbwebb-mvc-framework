<x-layout>
    <h1 class="title is-1">Game 21</h1>

    <form method="POST" action="{{ URL::Route('game21.reset') }}">
        @csrf
        <button class="button is-danger" type="submit">Reset</button>
    </form>

    <br>


    @if (!$game->get_dice_count())
        <form method="POST" action="{{ URL::Route('game21.setDice') }}">
            @csrf
            <button class="button is-link" type="submit" name="dice" value="1">Play with 1 dice</button>
            <button class="button is-link" type="submit" name="dice" value="2">Play with 2 dice</button>
        </form>
    @else
        <table class="table">
            <tbody>
                <tr>
                    <th>Points player</th>
                    <td>
                        {{ $game->get_points_player() }}
                    </td>
                </tr>
                <tr>
                    <th>Points computer</th>
                    <td>
                        {{ $game->get_points_computer() }}
                    </td>
                </tr>
                <tr>
                    <th>Wins player</th>
                    <td>
                        {{ $game->get_wins_player() }}
                    </td>
                </tr>
                <tr>
                    <th>Wins computer</th>
                    <td>
                        {{ $game->get_wins_computer() }}
                    </td>
                </tr>
            </tbody>
        </table>

        @if ($game->get_winner())
            @if ($game->get_winner() === 'player')
                <h3>Congratulations! You won!</h3>
            @elseif ($game->get_winner() === 'computer')
                <h3>Oh no! You lost!</h3>
            @endif

            <form method="POST" action="{{ URL::Route('game21.nextRound') }}">
                @csrf
                <button class="button is-link" type="submit">Next round</button>
            </form>
        @else
            <div class="is-clearfix mb-4">
                @foreach ($game->get_hand()->get_dice() as $dice)
                    <pre class="game21-dice">{!! $dice->render() !!}</pre>
                @endforeach
            </div>

            <div>
                <form class="is-inline" method="POST" action="{{ URL::Route('game21.roll') }}">
                    @csrf
                    <button class="button is-link" type="submit">Roll</button>
                </form>
                <form class="is-inline" method="POST" action="{{ URL::Route('game21.stop') }}">
                    @csrf
                    <button class="button is-success" type="submit">Stop</button>
                </form>
            </div>
        @endif
    @endif
</x-layout>